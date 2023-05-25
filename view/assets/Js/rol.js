function create(){
  let data = `txtRol=${document.getElementById('txtRol').value}`
  
  const options = {
  method:'POST',
  body: data,
  headers: {
      "Content-Type": "application/x-www-form-urlencoded",
  },
  
  };
  
      fetch("../controller/roles.create.php", options)
      .then(response => response.json())
      .then((data) => {
          console.log(data);
      })
  
  }