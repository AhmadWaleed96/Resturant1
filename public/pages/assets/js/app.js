let tableShow = document.querySelector("#tableShow")


let countPro = document.querySelector("#countPro")
let price = document.querySelector("#price")
let proName = document.querySelector("#proname")
let total = document.querySelector("#total")
let products;

countPro.oninput = _ => {
    total.innerHTML = price.innerHTML * +countPro.value;
    total.innerHTML = price1.innerHTML * +countPro1.value;
    total.innerHTML = price2.innerHTML * +countPro2.value;

}

if (localStorage.pros) {
    products = JSON.parse(localStorage.pros);

} else {
    products = [];

}




function addList(e) {

    let product = {};
    product.id = proName.innerHTML;
    product.name = e.parentElement.parentElement.childNodes[3].childNodes[1].innerHTML;
    product.price = e.parentElement.parentElement.childNodes[3].childNodes[2].childNodes[1].innerHTML;
    product.count = e.previousElementSibling.value;
    product.total = +product.price * +product.count;

    console.log(JSON.stringify(product));
    products.push(product);
    localStorage.pros = JSON.stringify(products);
    show();

}

function show() {
    let dataShow;
    products.forEach(element => {
        dataShow = `<tr id='ss'>
          <td>${element.name}</td>
          <td>${element.price}</td>
          <td>${element.count}</td>
          <td>${element.total}</td>
          <td>
            <button id="clear" onClick="onDelete(this)" style="background-color: red; color: white; border: 1px solid white;text-decoration: none; color:white; border-radius: 10px; padding: 5px;">Delete</button>
          </td>

        </tr>`

    });

    tableShow.innerHTML += dataShow
}




function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("buy");
        remove();
    }

}

let dALL = document.querySelector("#dALL")
var ss = document.querySelector("#ss")

dALL.onclick = _ => {
    localStorage.clear();

    tableShow.innerHTML = '';
    ss.innerHTML = '';
    show();

}