function encodeForAjax(data) {
  return Object.keys(data)
    .map(function(k) {
      return encodeURIComponent(k) + "=" + encodeURIComponent(data[k]);
    })
    .join("&");
}

function change_page_settings(page, name, username, email) {
  let request = new XMLHttpRequest();
  switch (page) {
    case "Account":
      request.open("POST", "../templates/settings/account.php", true);
      request.addEventListener("load", account_settings);
      break;
    case "Archive":
      request.open("POST", "../templates/settings/archive.php", true);
      request.addEventListener("load", new_page_settings);
      break;
    case "About":
      request.open("POST", "../templates/settings/about.php", true);
      request.addEventListener("load", new_page_settings);
      break;
  }
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(encodeForAjax({ name: name, username: username, email: email }));
}

function new_page_settings(event) {
  event.preventDefault();
  let div_block = document.getElementById("settings");
  if (div_block !== null) {
    div_block.innerHTML = this.responseText;
  }
}

function account_settings(event) {
  event.preventDefault();
  let div_block = document.getElementById("settings");
  if (div_block !== null) {
    div_block.innerHTML = this.responseText;
  }
  let uploadImage = document.getElementById("fileToUpload");
  if (uploadImage !== null) {
    uploadImage.addEventListener("change", addUserPhoto);
  }
}
