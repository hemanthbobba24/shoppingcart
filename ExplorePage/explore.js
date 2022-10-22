fetch('https://fakestoreapi.com/products').then((data)=>{
  //  console.log(data);
return data.json();
}).then((objectdata)=>{
    const random = Math.floor(Math.random()*objectdata.length);
    let randata = "";
      randata = `<div class="card">
      <div class="imgcontainer"><img src=${objectdata[random].image} class="cardimage">
      <p class="cardtitle">${objectdata[random].title}</p>
      </div>
  </div>`
    let mydata="";
    objectdata.map((val)=>{
      mydata += `<div class="items">
      <p class="title">${val.title}</p>
      <img src=${val.image} class="image">
      <p class="category">${val.category}</p>
      <p class="price">$${val.price}</p>
  </div>`
    });
    document.getElementById("rand").innerHTML = randata;
   document.getElementById("explore").innerHTML = mydata; 
}).catch((error)=>{
  console.log(error);
});


const btn = document.getElementById("downarrowbtn");
const list = document.getElementById("list");
const space = document.getElementById("space");
btn.addEventListener('click',()=>{
  space.classList.toggle("show2");
  list.classList.toggle("show");
});