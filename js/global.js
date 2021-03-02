let modal = document.getElementById("modal")

let btn = document.getElementById("btnLG")

let closeModal = document.getElementById("close")


btn.onclick = function () {
  modal.style.display = "block"
}
closeModal.onclick = function () {
  modal.style.display = "none"
}
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none"
  }
}


let modalP = document.getElementById("modalP")

let btnP = document.getElementById("btnP")

let closeModalP = document.getElementById("closeP")


btnP.onclick = function () {
  modalP.style.display = "block"
}
closeModalP.onclick = function () {
  modalP.style.display = "none"
}
window.onclick = function (event) {
  if (event.target == modalP) {
    modalP.style.display = "none"
  }
}