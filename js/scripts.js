alert('Hello World!')
// grab out <section> element for ouput.
const apiTestElement = document.getElementById( 'api-test' );

/**
 * make a request for all pets to the API 
 */

 // Set the request URL.
 fetch('http://localhost:80/api/pets.php')
 // convert the response from a string to an object.
 .then( response => response.json() )
 // Use the data (oject)!
 .then (pets => {
    const heading = document.createElement ( 'H2' );
    heading.textContent = 'Pets';
    const list = document.createElement( 'UL' );
    for (const pet in pets){
        const listItem = document.createElement ( 'LI' );
        listItem.innerHTML = `
        <dl>
            <dt>Age</dt>
            <dd>${pet.age}</dd>
            <dt>Type</dt>
            <dd>${pet.type}</dd>
            </dl>
            `;
        const tricksList = document.createElement('UL');
        for ( tricks of pets.tricks ){
            tricksList.innerHTML += `<li>${trick}</li>`;
        }
        listItem.appendChild( trackList );
        list.appendChild ( listItem );
    }
    apiTestElement.appendChild( list );
 })
