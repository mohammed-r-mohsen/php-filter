


window.onload = ()=>{

    let getalluser = ()=>{
            fetch('https://dummyjson.com/users')
            .then(res => res.json())
            .then(console.log);
    }


}