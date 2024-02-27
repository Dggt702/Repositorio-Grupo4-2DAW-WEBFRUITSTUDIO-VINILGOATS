window.onload = inicio; // Cargamos toda la página lo primero

function inicio()
{
    let boton = document.getElementById("submitButton"); // Cogemos el id del boton para que luego
    boton.addEventListener("click", validar); // Al hacer click podamos validarlo

    var mostrarMas = document.getElementById("mostrarMas"); // Cogemos el id de mostrarMas para que luego
    mostrarMas.addEventListener("click", mostrarVisibilidad); // Al hacer click muestre toda la info oculta
    let mostrarMenos = document.getElementById("mostrarMenos"); // Cogemos el id de mostrarMenos para que luego
    mostrarMenos.addEventListener("click", quitarVisibilidad); // Al hacer click quite la info oculta

    function mostrarVisibilidad() // Con esta función mostraremos la información oculta
    {
        document.getElementById("infoOculta").style.display = "block"; // Con esto mostraremos la información
        mostrarMas.style.display = "none"; // Con esto dejaremos de mostrar el mensaje de mostrarMas
        mostrarMenos.style.display = "block"; // Con esto mostraremos el mostrarMenos
    }

    function quitarVisibilidad() // Con esta función dejaremos de mostrar la información oculta
    {
        document.getElementById("infoOculta").style.display = "none"; // Con esto dejaremos de mostrar la información
        mostrarMas.style.display = "block"; // Con esto mostraremos el mostrarMas
        mostrarMenos.style.display = "none"; // Con esto dejaremos de mostrar el mensaje de mostrarMenos
    }

    function validarNombre() // Con esta función validamos el nombre
    {
        let elemento = document.getElementById("nombre"); // Cogemos el id del nombre
        let regexN = /^[a-zA-Z]+(?: [a-zA-Z]+)*$/; // La expresión regular del nombre
        let errorN = document.getElementById("errorN"); // Cogemos el id del errorN (el div donde van los errores del nombre, donde vamos a escribir cuáles son los problemas que hemos visto que con el nombre)
        if (elemento.value === "") // Si el campo del nombre está vacío
        {
            errorN.innerHTML = "Debe introducir su nombre."; // Les indicamos en el div errorN que escriban su nombre
            return false;
        }
        else if (!regexN.test(elemento.value)) // Si el nombre que escriben no coincide con la expresión regular
        {
            errorN.innerHTML = "El nombre no cumple con los requisitos."; // Les indicamos en el div errorN que escriban un nombre que cumpla con los requisitos
            return false;
        }
        else if (elemento.validity.patternMismatch) // Si el nombre que escriben no coincide con la expresión regular
        {
            errorN.innerHTML = "El nombre no cumple con los requisitos."; // Les indicamos en el div errorN que escriban un nombre que cumpla con los requisitos
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            errorN.innerHTML = ""; // No saltará ningun error o se borrará el error
            return true;
        }
    }

    function validarEmail() // Con esta función validamos el correo electrónico
    {
        let elemento = document.getElementById("correo"); // Cogemos el id del correo electrónico
        let regexC = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // La expresión regular del correo electrónico
        let errorC = document.getElementById("errorC"); // Cogemos el id del errorC (el div donde van los errores del correo, donde vamos a escribir cuáles son los problemas que hemos visto que con el correo)
        if (elemento.value === "") // Si el campo del correo electrónico está vacío
        {
            errorC.innerHTML = "Debe introducir un email válido."; // Les indicamos en el div errorC que escriban su correo
            return false;
        }
        else if (!regexC.test(elemento.value)) // Si el correo electrónico que escriben no coincide con la expresión regular
        {
            errorC.innerHTML = "El correo electrónico no cumple con los requisitos."; // Les indicamos en el div errorC que escriban un correo que cumpla con los requisitos
            return false;
        }
        else if (elemento.validity.patternMismatch) // Si el correo electrónico que escriben no coincide con la expresión regular
        {
            errorC.innerHTML = "Formato incorrecto. Debe introducir un email válido."; // Les indicamos en el div errorC que escriban un correo que cumpla con los requisitos
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            errorC.innerHTML = ""; // No saltará ningun error o se borrará el error
            return true;
        }
    }

    function validarPassword() // Con esta función validamos la contraseña
    {
        let password = document.getElementById("password"); // Cogemos el id de la contraseña
        let regexP = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/; // La expresión regular de la contraseña
        let errorP = document.getElementById("errorP"); // Cogemos el id del errorP (el div donde van los errores de la contraseña, donde vamos a escribir cuáles son los problemas que hemos visto que con la contraseña)
        if (password.value === "") // Si el campo de la contraseña está vacía
        {
            errorP.innerHTML = "Debe introducir su contraseña. Tiene que tener al menos ocho caracteres, una mayúscula, una mínuscula, un número y un símbolo."; // Les indicamos en el div errorP que escriban su contraseña
            return false;
        }
        else if (!regexP.test(password.value)) // Si la contraseña que escriben no coincide con la expresión regular
        {
            errorP.innerHTML = "La contraseña no cumple con los requisitos. Tiene que tener al menos ocho caracteres, una mayúscula, una mínuscula, un número y un símbolo."; // Les indicamos en el div errorP que escriban una contraseña que cumpla con los requisitos
            return false;
        }
        else if (password.validity.patternMismatch) // Si la contraseña que escriben no coincide con la expresión regular
        {
            errorP.innerHTML = "La contraseña no cumple con los requisitos. Tiene que tener al menos ocho caracteres, una mayúscula, una mínuscula, un número y un símbolo."; // Les indicamos en el div errorP que escriban una contraseña que cumpla con los requisitos
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            errorP.innerHTML = ""; // No saltará ningun error o se borrará el error
            return true;
        }
    }

    function redirigir() // Redirige a la página deseada
    {
        location.replace("Page2.html");
    }

    function confirmarPassword() // Con esta función validamos la confirmación de la contraseña
    {
        let password = document.getElementById("password"); // Cogemos el id de la contraseña
        let confirmPassword = document.getElementById("confirmPassword");  // Cogemos el id de la confirmacion de la contraseña
        let errorP = document.getElementById("errorP"); // Cogemos el id del errorP (el div donde van los errores de la contraseña, donde vamos a escribir cuáles son los problemas que hemos visto que con la contraseña)
        if (confirmPassword.value === "") // Si el campo de la comfirmación de la contraseña está vacía
        {
            errorP.innerHTML = "Debe confirmar su contraseña."; // Les indicamos en el div errorP que escriban su contraseña
            return false;
        }
        if (password.value !== confirmPassword.value) // Si las contraseñas no coinciden
        {
            errorP.innerHTML = "Las contraseñas no coinciden."; // Les indicamos en el div errorP que escriban la misma contraseña
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            errorP.innerHTML = ""; // No saltará ningun error o se borrará el error
            return true;
        }
    }

    // Con el evento 'blur' hacemos que haga foco en las funciones necesarias de validación:
    document.getElementById("nombre").addEventListener("blur", validarNombre);  
    document.getElementById("correo").addEventListener("blur", validarEmail);
    document.getElementById("password").addEventListener("blur", validarPassword);
    document.getElementById("confirmPassword").addEventListener("blur", confirmarPassword);
    document.getElementById("fechaNacimiento").addEventListener("blur", validarFechaNacimiento);
    document.getElementById("direccion").addEventListener("blur", validarDireccion);
    document.getElementById("dni").addEventListener("blur", validarDNI);
    document.getElementById("numTarjeta").addEventListener("blur", validarTarjeta);

    
    function validarFechaNacimiento() 
    {
        let fechaNacimientoInput = document.getElementById("fechaNacimiento"); // Cogemos el id de la fecha de nacimiento
        let fechaNacimiento = new Date(fechaNacimientoInput.value); // Sacamos un new Date
        let fechaActual = new Date(); // Obtenemos la fecha actual
        let edad = fechaActual.getFullYear() - fechaNacimiento.getFullYear();
        let meses = fechaActual.getMonth() - fechaNacimiento.getMonth(); // Calculamos la edad
        
        if (!fechaNacimientoInput) 
        {
            document.getElementById("errorF").innerHTML = "Por favor, seleccione una fecha de nacimiento."; // Mostramos el mensaje de error
            return false;
        }
        if (meses < 0 || (meses === 0 && fechaActual.getDate() < fechaNacimiento.getDate())) // Comprobamos si ya ha pasado su cumpleaños de este año
        {
            edad--;
        }
        if (edad < 18) // Validamos que la edad sea mayor o igual a 18  
        {   
            document.getElementById("errorF").innerHTML = "Debes ser mayor de 18 años."; // Mostramos el mensaje de error
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            document.getElementById("errorF").innerHTML = ""; // No saltará ningun error o se borrará el error
            return true;
        }
    }
    
    function validarDireccion() 
    {
        let direccionInput = document.getElementById("direccion"); // Cogemos el id de la dirección
        let direccion = direccionInput.value.trim();
        
        if (direccion === "") // Si el campo de la comfirmación de la dirección está vacía
        {
            document.getElementById("errorD").innerHTML = "Por favor, escribe tu dirección."; // Les indicamos en el div errorDNI que escriban su dirección
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            document.getElementById("errorD").innerHTML = ""; // No saltará ningun error o se borrará el error
            return true;
        }
        
    }
    
    function validarDNI() 
    {
        let dniInput = document.getElementById("dni"); // Cogemos el id del DNI
        let dni = dniInput.value.trim();
        let regexDNI = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/; // La expresión regular del DNI
        let errorDNI = document.getElementById("errorDNI"); // Cogemos el id del errorDNI (el div donde van los errores del DNI, donde vamos a escribir cuáles son los problemas que hemos visto que con el DNI)
    
        if (dni === "")  // Si el campo de la comfirmación del DNI está vacío
        {
          errorDNI.innerHTML = "Por favor, escriba su DNI."; // Les indicamos en el div errorDNI que escriban su DNI
            return false;
        }
        if (!regexDNI.test(dni)) // Si el DNI que escriben no coincide con la expresión regular
        {
            errorDNI.innerHTML = "El número de DNI debe tener 8 dígitos numéricos seguidos de una letra válida."; // Les indicamos en el div errorDNI que escriban un DNI que cumpla con los requisitos
            return false;
        }
        // Extraemos los dígitos y la letra del DNI para realizar la comprobación de la letra
        let digitos = dni.slice(0,9);
        let letra = dni.slice(-1);

        // Calculamos la letra esperada según el algoritmo establecido
        let letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        let letraEsperada = letras[dni.slice(0, 8) % 23];

        // Verificamos que la letra proporcionada coincida con la esperada
        if (letra.toUpperCase() !== letraEsperada) 
        {
            errorDNI.innerHTML = "La letra del DNI no es válida.";
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            errorDNI.innerHTML = ""; // No saltará ningun error o se borrará el error
            return true; 
        } 
    }

    function validarTarjeta()
    {
            // Validación de la tarjeta de crédito (si se proporciona dirección completa)
            var direccion = document.getElementById("direccion"); // Cogemos el id de la dirección
            var pais = document.getElementById("pais"); // Cogemos el id del país
            var numTarjeta = document.getElementById("numTarjeta").value; // Cogemos el id de la tarjeta
            let errorNT = document.getElementById("errorNT"); // Cogemos el id del errorNT (el div donde van los errores del número de la tarjeta, donde vamos a escribir cuáles son los problemas que hemos visto que con el número de la tarjeta)
            var regexTarjeta = /^\d{16}$/;

            if (direccion && pais) 
            {
            
                if (numTarjeta === "")  // Si el campo de la comfirmación del número de tarjeta está vacío
                {
                    errorNT.innerHTML = "Por favor, escriba su número de tarjeta."; // Les indicamos en el div errorNT que escriban su número de tarjeta
                }
                // Validación de la tarjeta de crédito (16 dígitos)
                else if (!regexTarjeta.test(numTarjeta)) // Si la contraseña que escriben no coincide con la expresión regular
                {
                    errorNT.innerHTML = "El número de tarjeta debe tener 16 dígitos numéricos válidos."; // Les indicamos en el div errorNT que escriban un número de tarjeta que cumpla con los requisitos
                    return false;
                }
                else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
                {
                    errorNT.innerHTML = ""; // No saltará ningun error o se borrará el error
                    return true;
                }
            }
}


    function validar(e) // Con esta función validamos todo el formulario
    {
        // Realizamos las verificaciones una por una
        if (!validarNombre()) 
        {
            e.preventDefault();
            return false;
        }
    
        if (!validarEmail()) 
        {
            e.preventDefault();
            return false;
        }
    
        if (!validarPassword()) 
        {
            e.preventDefault();
            return false;
        }
    
        if (!confirmarPassword()) 
        {
            e.preventDefault();
            return false;
        }

        // Validadamos la información oculta solo si está desplegada
        if (document.getElementById("mostrarMas").style.display === "none")
        {
            // Validamos la información oculta de una en una
            if (!validarFechaNacimiento()) 
            {
                e.preventDefault();
                return false;
            }
            if (!validarDireccion()) 
            {
                e.preventDefault();
                return false;
            }
            if (!validarDNI()) 
            {
                e.preventDefault();
                return false;
            }
            if (!validarTarjeta())
            {
                e.preventDefault();
                return false;
            }
        }
    
        // Preguntamos al usuario antes de enviar el formulario
        if (confirm("¿Seguro que quiere enviar el formulario?")) 
        {
            // Redirige a la página deseada
            redirigir();
            return true;
        } else 
        {
            e.preventDefault();
            return false;
        }
    }
}

function slider(){

    const btnDerecho = document.querySelector("#btnSliderDerecha");
    const btnIzquierdo = document.querySelector("#btnSliderIzquierda");
    
    let sliderInner=document.querySelector(".slider");
    let images = sliderInner.querySelectorAll("img");
    let index = 1;
    
    function slideAutomatico(){
        let percentage = index * -100;
        sliderInner.style.transform = "translateX("+percentage+"%)";
        index++;
    
        if(index>images.length - 1){
            index=0;
            
        }
    }
    
    function slideManualIzquierda(){
          clearInterval(intervalo);
        let percentage = index * 100;
        index--;
        sliderInner.style.transform = "translateX("+percentage+"%)";
        if(index<=0){
            index=1;
        }
        intervalo=setInterval(slideAutomatico,5000);
    }
    function slideManualDerecha(){
        clearInterval(intervalo);
        let percentage = index * -100;
        sliderInner.style.transform = "translateX("+percentage+"%)";
        index++;
        if(index>images.length-1){
            index=0;
        }
        intervalo=setInterval(slideAutomatico,5000);
    }
    
        var intervalo=setInterval(slideAutomatico,5000);
        /*btnDerecho.addEventListener("click",slideManualDerecha);
        btnIzquierdo.addEventListener("click",slideManualIzquierda);*/
    
    }

    // Datos de ejemplo de productos/servicios

    const products = 
    [

        { id: 1, name: "EL ÚLTIMO TOUR DEL MUNDO - BAD BUNNY", description: "Precio: 20.00€" },

        { id: 2, name: "Rodeo - Travis Scott", description: "Precio: 25.00€" },

        { id: 1, name: "Dangerous - Michael Jackson", description: "Precio: 30.00€" },

        { id: 2, name: "Nimrod - Green Day", description: "Precio: 25.00€" },

        // Agrega más productos aquí...

  ];

    // Función para buscar productos
    function search() 
    {
        const searchInput = document.getElementById('searchInput');
        const searchTerm = searchInput.value.toLowerCase();
        const searchResults = products.filter(product =>
            product.name.toLowerCase().includes(searchTerm) || product.description.toLowerCase().includes(searchTerm)
        );
        showProducts(searchResults);
    }

    // Función para mostrar los productos en donde están en los vinilos
    function showProducts(productsToShow) 
    {
        const vinilosSection = document.getElementById('vinilos');
        vinilosSection.innerHTML = '';
        productsToShow.forEach(product => 
        {
            const colDiv = document.createElement('div');
            colDiv.classList.add('col-3', 'col-sm-3', 'col-md-3', 'col-lg-3', 'col-xl-3');

            const viniloDiv = document.createElement('div');
            viniloDiv.classList.add('vinilo');
            viniloDiv.classList.add('viniloSeleccionado');

            const img = document.createElement('img');
            img.src = `../IMG/VINILOS/${product.name}.jpg`; // Ajusta el nombre de la imagen según tus archivos
            img.alt = `Vinilo ${product.id}`;

            const productLink = document.createElement('a');
            productLink.href = `./infoDiscos${product.id}.html`;
            productLink.textContent = product.name;

            const priceParagraph = document.createElement('p');
            priceParagraph.textContent = product.description;

            const addButton = document.createElement('button');
            addButton.textContent = 'Añadir al carrito';

            viniloDiv.appendChild(img);
            viniloDiv.appendChild(productLink);
            viniloDiv.appendChild(priceParagraph);
            viniloDiv.appendChild(addButton);

            colDiv.appendChild(viniloDiv);
            vinilosSection.appendChild(colDiv);
        });
    }

    document.addEventListener("DOMContentLoaded", function()
    {
        const containerCartProducts = document.querySelector(".container-cart-products");
        const rowProduct = document.querySelector(".row-product"); 
        const btnCart = document.getElementById("iconCarrito");
        // lista de todos los contenedores de productos
        const productList = document.querySelector(".container-vinilos");
        // array de productos
        let allProducts  = [];
        const valorTotal = document.querySelector(".total-pagar");
        //let isCartEmpty = true; // Variable para rastrear si el carrito está vacío
    
        btnCart.addEventListener("click", () => 
        {
            containerCartProducts.classList.toggle("hidden-cart");
        });

        // El event listener para que al hacer click sobre los botones para añadir al carrito se añadan al carrito
        productList.addEventListener("click", e =>
        {
            if(e.target.classList.contains("btn-add-cart"))
            {
                const productV = e.target.parentElement;
                const infoProduct = 
                {
                    quantity: 1,
                    title: productV.querySelector("a").textContent,
                    price: productV.querySelector("p").textContent,
                };

                /*if (isCartEmpty) 
                {
                    isCartEmpty = false; // Si el carrito está vacío y se agrega un producto, establecer isCartEmpty en false
                }*/

                const existingProduct = allProducts.find(product => product.title === infoProduct.title);
                if (existingProduct) // si el producto existe
                {
                    existingProduct.quantity++; // aumentamos el producto en uno
                }
                else
                {
                    allProducts.push(infoProduct);
                }   
            }
            showHTML();
        });
    
        rowProduct.addEventListener("click", (e) =>
        {
            if (e.target.classList.contains("icon-close")) // si hacemos click en la "x"
            {   // Eliminamos el producto seleccionado
                const product = e.target.parentElement;
                const title = product.querySelector("p.titulo-producto-carrito").textContent;
                allProducts = allProducts.filter(product => product.title !== title);
                console.log("Productos después de eliminar:", allProducts);
                showHTML(); // Llamamos a showHTML() después de eliminar un producto para que el contenido del carrito se actualice de manera adecuada
            }
        });

        const showHTML = () =>
        {
            // Verificamos si el carrito está vacío antes de limpiar el contenido
            let total = 0;
            rowProduct.innerHTML = "";

            if (allProducts.length === 0) 
            {
                //isCartEmpty = true; // El carrito está vacío
                containerCartProducts.classList.add("hidden-cart");
                containerCartProducts.innerHTML = `<p class="cart-empty">El carrito está vacío</p>`;
                return; // Salimos de la función si el carrito está vacío
            }
            else
            {
                containerCartProducts.classList.remove("hidden-cart");
                //isCartEmpty = false; // El carrito no está vacío
            }

            allProducts.forEach(product => 
                {
                    const containerProduct = document.createElement('div');
                    containerProduct.classList.add("cart-product");
                    containerProduct.innerHTML = 
                    `<div class="info-cart-product">
                        <span class="cantidad-producto-carrito">${product.quantity}</span>
                        <p class="titulo-producto-carrito">${product.title}</p>
                        <span class="precio-producto-carrito">${product.price}</span>
                    </div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="icon-close"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                        >
                        </path>
                    </svg>
                    `
                    rowProduct.append(containerProduct);

                    total = total + parseFloat(product.price.replace('€', '')) * product.quantity;
                });
                valorTotal.innerText = `${total}€`;
                let iconClose =  document.querySelector('.icon-close');
                if (containerCartProducts.classList.contains("hidden-cart")) 
                {
                    iconClose.style.display = "none"; // Oculta el icono si el carrito está oculto
                } 
                else 
                {
                    iconClose.style.display = "block"; // Muestra el icono si el carrito está visible
                }
        }
    });