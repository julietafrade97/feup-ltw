
function encodeForAjax(data) {
    return Object.keys(data)
      .map(function(k) {
        return encodeURIComponent(k) + "=" + encodeURIComponent(data[k]);
      })
      .join("&");
  }

function addUserPhoto(event) {
    event.preventDefault();
    let request = new XMLHttpRequest();
    let photo = document.getElementById("fileToUpload").value;

    /*request.addEventListener("load", imageUploaded, false);
    request.addEventListener("error", imageFailed, false);
    request.open("post", "api_upload_photo.php", true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send( encodeForAjax({file: fileValue}) );*/

}

function imageUploaded(event) {
    event.preventDefault();
    alert(this.responseText);
    //document.getElementById('photo').src = t
}

function imageFailed(event) {

}