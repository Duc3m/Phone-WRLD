const fetchDataForDetail = async (detailId=1) =>{
    const uri = window.location.href.split("?")[1];
    const res = await fetch(`http://localhost/Phone_WRLD/app/API/getProductDetail.php?${uri}&detail_id=${detailId}`)
    const json = await res.json()
    console.log(json)
    rederProductDetail(json)
}

function rederProductDetail(data){
    const product_infomation = document.querySelector(".product__page__top__right")
    product_infomation.innerHTML = `<div class="product__page__information">
    <h1 class="product__page__information__name">Điện thoại ${data.name} ${data.detail_name}</h1>
    <div class="product__page__information__rating">
        <div class="product__page__information__stars">
            <img src="./assets/icon/star-black.svg" alt="">
            <img src="./assets/icon/star-black.svg" alt="">
            <img src="./assets/icon/star-black.svg" alt="">
            <img src="./assets/icon/star-black.svg" alt="">
            <img src="./assets/icon/star-white.svg" alt="">
        </div>
        <p>4 sao</p>
        <p>69 đánh giá</p>
    </div>

    <h2 class="product__page__information__price">${Number.parseInt(data.price).toLocaleString('en-us')} đ</h2>

    <div class="product__page__information__option">
        <h3>Chọn phiên bản</h3>
        <div class="product__page__information__option__panel">
            ${data.detail_list.map((item)=>
                `<div class="product__page__information__option__picker">${item.detail_name}</div>`
                ).join("")}
        </div>
    </div>

    <div class="product__page__information__color">
        <h3>Chọn màu</h3>
        <div class="product__page__information__color__panel">
                ${data.color_list.map(item => `<div class="product__page__information__color__picker">${item.name}</div>`).join("")}
        </div>
    </div>

    <div class="product__page__information__button__panel">
        <button class="product__page__information__button__addToCart">Thêm vào giỏ hàng</button>
    </div>
</div>`
    

}
async function main(){
    await fetchDataForDetail()
}
main()