//Test 1

// var myVar = 123;

// maFonction();

// function maFonction() {
//      console.log("myVar fonction : "+myVar);
//      } 

// if (myVar > 1) {
//         console.log("myVar condition : "+myVar);
// } 

// console.log("myVar fin : "+myVar);

// Test 2

var compteur = 2;

function maFonction() {
     var myVar = 456; 
     console.log("myVar : "+myVar);
     }

if (compteur > 1) { 
    let myVar2 = "Wazaa !";
    console.log("myVar2 : "+myVar2);
}
     /* Ici, myVar n'est pas disponible
      * car déclarée dans la fonction 
      * sa portée ne concerne que le code de la fonction 
      * */

     console.log("myVar : "+myVar); 

     /* Ici, myVar2 n’est pas disponible 
     * car déclarée dans le bloc de condition
      * avec une portée uniquement pour ce bloc
     */ 
    console.log("myVar2 : "+myVar2);