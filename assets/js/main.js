let productList;

const getData = async (pagenumber = 1) => {
    const response = await fetch(`http://localhost/Phone_WRLD/app/API/getProductToList.php?page=${pagenumber}`)
    const json  = await response.json()
    return json
}

const main = async () =>{
    productList = await getData()
    console.log(productList)
}
main()