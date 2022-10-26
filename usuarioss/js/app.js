const axios = require('axios').default;
async function connectToURL(url){
    const resp =  await axios.get(url);
    console.log(resp.data)
}

connectToURL('http://localhost/usuarioss/?controller=Users&action=showUsers&id=1').catch(err => {
    console.log(err.toString())
})

