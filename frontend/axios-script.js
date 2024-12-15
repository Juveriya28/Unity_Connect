const axios = require('axios'); // Import Axios library

axios.get('https://jsonplaceholder.typicode.com/posts/1') // Sample API call
    .then(response => {
        console.log('Data:', response.data); // Print response data
    })
    .catch(error => {
        console.error('Error:', error); // Handle errors
    });
