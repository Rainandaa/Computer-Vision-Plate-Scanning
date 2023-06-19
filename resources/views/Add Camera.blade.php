<!DOCTYPE html>
<html>
   <head>
      <title>Camera Locations</title>
   </head>
   <style>
      body{
    background-image: url({{url('images/background-white.jpg')}});
    overflow: hidden;
    background-size: cover;
  }

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
  }
  
  .back-button {
    width: 30px;
    position: absolute;
    top: 20px;
    left: 20px;
  }

  .camera-locations,
.add-more-button,
.edit-button,
.add-camera-form {
  margin: auto;
  margin-bottom: 10%;
}

  .location-button {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    background-color: rgba(0, 0, 0, 0.8);
    border: none;
    color: white;
    opacity: 0.8;
    cursor: pointer;
    transition: opacity 0.3s;
  }
  
  .location-button:hover {
    opacity: 1;
  }
  
  .add-more-button,
  .edit-button {
    display: inline-block;
    padding: 10px 20px;
    margin-right: 10px;
    background-color: rgba(0, 0, 0, 0.8);
    border: none;
    color: white;
    opacity: 0.8;
    cursor: pointer;
    transition: opacity 0.3s;
  }
  
  .add-more-button:hover,
  .edit-button:hover {
    opacity: 1;
  }
  
  .add-camera-form {
    margin-top: 20px;
    text-align: center;
  }
  
  .add-camera-form h3 {
    margin-bottom: 10px;
  }
  
  .add-camera-form label {
    display: block;
    margin-bottom: 5px;
    text-align: left;
  }
  
  .add-camera-form input {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
  }
  
  .add-camera-form button[type="submit"] {
    display: block;
    margin: 0 auto;
    padding: 10px 20px;
    background-color: rgba(0, 0, 0, 0.8);
    border: none;
    color: white;
    opacity: 0.8;
    cursor: pointer;
    transition: opacity 0.3s;
  }
  
  .add-camera-form button[type="submit"]:hover {
    opacity: 1;
  }
   </style>
   <body>
      <div class="container">
         <a href="/Main"><img src="{{URL::asset('/images/backbutton.png')}}" alt="" class="back-button"></a>
         <div class="add-camera-form hidden" style="color: rgb(0, 0, 0); opacity: 80%;">
            <h3>Add Camera Location</h3>
            <form>
               <label for="location-name" >Location Name:</label>
               <input type="text" id="location-name" name="location-name">
               <label for="camera-name" >Camera Name:</label>
               <input type="text" id="camera-name" name="camera-name">
               <button type="submit">Save</button>
            </form>
         </div>
         <div class="camera-locations">
            <button class="location-button"  style="color: white; opacity: 80%;">Jakarta Gudang A</button>
            <button class="location-button"  style="color: white; opacity: 80%;">Jakarta Gudang B</button>
            <button class="location-button"  style="color: white; opacity: 80%;">Bandung Gudang A</button>
            <button class="location-button"  style="color: white; opacity: 80%;">Bandung Gudang B</button>
         </div>
         <a href="/try"><button class="add-more-button" style="color: white; opacity: 80%;">Try Camera</button></a>
         <button class="edit-button" style="color: white; opacity: 80%;">Edit</button>
      </div>
   </body>
</html>