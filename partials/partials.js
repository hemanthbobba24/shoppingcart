const list = document.getElementById("list");
const btn = document.getElementById("btn");
btn.addEventListener('click',()=>{
  list.classList.toggle("show");
});