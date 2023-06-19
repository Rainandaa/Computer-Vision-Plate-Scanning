import tkinter as tk
from tkinter import filedialog
from tkinter import *
from PIL import ImageTk, Image
from tkinter import PhotoImage
import numpy as np
import cv2
import pytesseract as tess

def clean2_plate(plate):
    # to clean the identified number plate using above discussed openCV methods
    gray_img = cv2.cvtColor(plate, cv2.COLOR_BGR2GRAY)
    _, thresh_val = cv2.threshold(gray_img, 110, 255, cv2.THRESH_BINARY)
    num_contours, hierarchy = cv2.findContours(thresh_val.copy(), cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_NONE)
    
    if num_contours:
        conto_ar = [cv2.contourArea(c) for c in num_contours]
        max_cntr_index = np.argmax(conto_ar)
        max_cnt = num_contours[max_cntr_index]
        max_cntArea = conto_ar[max_cntr_index]
        x, y, w, h = cv2.boundingRect(max_cnt)
        
        if not ratioCheck(max_cntArea, w, h):
            return plate, None
        
        final_img = thresh_val[y:y+h, x:x+w]
        return final_img, [x, y, w, h]
    else:
        return plate, None


# method to identify the range of area and ratio between width and height
def ratioCheck(Ar, breatth, height):
    ratio = float(breatth) / float(height)
    
    if ratio < 1:
        ratio = 1 / ratio
        
    if (Ar < 73862.5) or (ratio < 6):
        return False
    
    return True


# method to identify the average of image matrix
def isMaxWhite(plate):
    avg = np.mean(plate)
    
    if avg >= 115:
        return True
    else:
        return False


# to find the rotation of contours
def ratio_and_rotation(rect):
    (x, y), (breatth, height), rect_angle = rect
    
    if breatth > height:
        angle = -rect_angle
    else:
        angle = 90 + rect_angle
        
    if angle > 15:
        return False
    
    if height == 0 or breatth == 0:
        return False
    
    Ar = height * breatth  # area calculation
    
    if not ratioCheck(Ar, breatth, height):
        return False
    else:
        return True


top = tk.Tk()
top.geometry('900x700')  # window size
top.title('Number Plate Recognition')  # title of GUI
top.iconphoto(True, PhotoImage(file="/home/shikha/GUI/logo.png"))  # give the path of folder where your test image is available
img = ImageTk.PhotoImage(Image.open("logo.png"))  # to open your image
top.configure(background='#CDCDCD')  # background color

label = Label(top, background='#CDCDCD', font=('arial', 35, 'bold'))  # to set background, font, and size of the label
sign_image = Label(top, bd=10)
plate_image = Label(top, bd=10)

def classify(file_path):
    res_text = [0]
    res_img = [0]
    img = cv2.imread(file_path)
    img2 = cv2.GaussianBlur
