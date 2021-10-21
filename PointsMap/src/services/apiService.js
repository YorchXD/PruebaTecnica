const baseUrlOptions = 'http://localhost:80/APIOpciones/';
const baseUrlPois = 'http://localhost/APIPois/'

export async function getOptions () 
{
  const response = await fetch(`${baseUrlOptions}`);
  const responseJson = await response.json();
  return responseJson;
}

export async function getPois(category) 
{
    var response;
    if(category!=='TODOS')
    {
        response = await fetch(`${baseUrlPois}${category}`);
    }
    else 
    {
        response = await fetch(`${baseUrlPois}`);
    }

    const responseJson = await response.json();
    return responseJson;
}
