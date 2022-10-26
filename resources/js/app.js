import "./bootstrap";

const addButton = document
    .getElementById("addTodoButton")
    .addEventListener("click", () => {
        console.log("buttonタグ反応");
    });
const addInput = document
    .getElementById("addTOdoInput")
    .addEventListener("click", () => {
      console.log("inputタグ反応");
      addButton.disabled = false;
    });

