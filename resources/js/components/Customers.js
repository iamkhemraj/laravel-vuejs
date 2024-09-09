import axios from 'axios';

axios.get('http://127.0.0.1:8000/api/all-user')
  .then(response => {
    console.log(response.data);
  })
  .catch(error => {
    console.log(error);
});