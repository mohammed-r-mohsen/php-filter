


window.onload = ()=>{
  let btn  = document.querySelector('button',0);
    btn.onclick =  ()=>{
        axios.get('/user?ID=12345')
        .then(function (response) {
          // handle success
          console.log(response);
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .finally(function () {
          console.log('good job');
        });
  }

  let test = ()=>{
        alert(0)
  }


}







let api=(filters)={
                        
}
switch (gender || address) {
case 'gender' :
    return `https://dummyjson.com/users/filter?key=gender&value=${gender}`;
    break;
case 'address':
    return `https://dummyjson.com/users/filter?key=address.city&value=${address} `;
    break;
default:
    return `https://dummyjson.com/users`;
    break;
}

let getdata = (gender , address)=>{
let filters = ``;

    

 let data = ``;
 let address = ``;
 axios.get('https://dummyjson.com/users')
.then(res => {
res.data.users.forEach(user => {
    address +=`<option value="${user.address.city}">${user.address.city}</option>`;
        tbody.innerHTML +=data ;
        select.innerHTML +=address ; 
})
})
.catch(err=>{
console.log(err);
})
.finally(()=>{
console.log('end test');
});
}



// https://dummyjson.com/users/filter?key=hair.color&value=Brown filter code 
// https://dummyjson.com/users/filter?key=gender&value=male 