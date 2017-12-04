let commentForm = document.querySelector("#addCategory form");
console.log(commentForm);
commentForm.addEventListener("submit", addNewCategory);

function encodeForAjax(data) {
  return Object.keys(data)
    .map(function(k) {
      return encodeURIComponent(k) + "=" + encodeURIComponent(data[k]);
    })
    .join("&");
}

function addNewCategory(event) {
  event.preventDefault();
  let nameValue = document.querySelector(
    "#addCategory input[name=categoryName]"
  ).value;
  let colorValue = document.querySelector(
    "#addCategory input[name=categoryColor]"
  ).value;
  let foreignIDValue = document.querySelector(
    "#addCategory input[name=foreignID]"
  ).value;
  let isUserValue = document.querySelectorAll(
    "#addCategory input[type=radio][name=isUser]:checked"
  )[0].value;
  console.log(isUserValue);
  let request = new XMLHttpRequest();
  request.addEventListener("load", finishRegister);
  request.open("post", "api_add_category.php", true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(
    encodeForAjax({
      categoryName: nameValue,
      categoryColor: colorValue,
      foreignID: foreignIDValue,
      isUser: isUserValue
    })
  );
}

function finishRegister(event) {
  let categories = JSON.parse(this.responseText);
}
