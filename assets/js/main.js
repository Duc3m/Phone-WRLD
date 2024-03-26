// let productList;

// const getData = async (pagenumber = 1) => {
//     const response = await fetch(
//         `http://localhost/Phone_WRLD/app/API/getProductToList.php?page=${pagenumber}`
//     );
//     const json = await response.json();
//     return json;
// };

// const main = async () => {
//     productList = await getData();
//     console.log(productList);
// };
// main();

// =========== Render Products ===========
let currentPage = 1; // Trang hiện tại
const itemsPerPage = 8; // Số item trên mỗi trang

async function fetchDataAndRender(page) {
    console.log("Fetching data for page:", page);
    const response = await fetch(
        `./app/API/getProductToList.PHP?page=${page}&itemsPerPage=${itemsPerPage}`
    );
    if (!response.ok) {
        throw new Error("Network response was not ok");
    }
    const json = await response.json();
    // console.log(json);
    renderProduct(json); // Gọi hàm renderProduct và truyền dữ liệu từ API vào
    // console.log(json.totalPages);
    renderPagination(json.totalPages); //Gọi hàm renderPagination
    scrollToTitleProduct(); // Cuộn trang lên đầu Product

    // .then((response) => {
    //     if (!response.ok) {
    //         throw new Error("Network response was not ok");
    //     }
    //     // console.log(response.json())
    //     return response.json();
    // })
    // .then((data) => {
    //     console.log(data);
    //     renderProduct(data);
    //     console.log(data.totalPages);
    //     renderPagination(data.totalPages);

    //
    // })
    // .catch((error) => console.error("Error fetching data:", error));
}
// Hàm cuộn lên đầu Product
function scrollToTitleProduct() {
    const titleProduct = document.querySelector(".product");
    if (titleProduct) {
        titleProduct.scrollIntoView({ behavior: "smooth", block: "start" });
    }
}
// Hàm renderProduct
function renderProduct(data) {
    console.log("Rendering products:", data);
    const productList = document.querySelector(".product__list");
    if (productList && data) {
        productList.innerHTML = ""; //Xóa nội dung cũ trong productList

        // Lặp qua các property của object data
        for (let key in data) {
            // Kiểm tra nếu key là một số
            // console.log(key);
            if (!isNaN(key)) {
                const product = data[key]; // Lấy thông tin sản phẩm từ property có tên là key
                const productArticle = document.createElement("article");
                productArticle.classList.add("product__item");
                // productArticle.id = product.id;
                productArticle.innerHTML = `
                    <figure class="product__item-img-wrap">
                        <img
                            
                            src="data:image/png;base64,${product.thumbnail}" 
                            class="product__item-img"
                            alt=""
                        />
                    </figure>
                    <h3 class="product__name">${product.name}</h3>
                    <div class="product__item-info-row">
                        <span class="product__price">${Number.parseInt(
                            product.price
                        ).toLocaleString("en-us")}đ</span>
                        <div class="row-price-stars">
                            <span class="product__num-star">5</span>
                            <div class="product__star">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                        fill="#FFB700"
                                    />
                                </svg>
                            </div>
                        </div>
                      
                    </div>`;
                productArticle.onclick = () => {
                    let url = window.location.href.split("?")[0].split("/");
                    // window.location = `${url}product.php?id=${product.id}`;
                    console.log(url);
                    if (url[url.length - 1] == "index.php") {
                        url.pop();
                        url = url.join("/");
                        window.location = `${url}/product.php?id=${product.id}`;
                    } else {
                        url = url.join("/");
                        window.location = `${url}product.php?id=${product.id}`;
                    }
                };
                productList.appendChild(productArticle);
            }
        }
    }
}

// Hàm Render Pagination
function renderPagination(totalPages) {
    console.log("Rendering pagination with totalPages:", totalPages);
    const paginationContainer = document.querySelector(".pagination__product");
    if (paginationContainer) {
        paginationContainer.innerHTML = ""; // Xóa nội dung cũ trong paginationContainer

        if (totalPages <= 1) {
            paginationContainer.style.display = "none";
        } else {
            for (let i = 1; i <= totalPages; i++) {
                const pageItem = document.createElement("li");
                pageItem.classList.add("pagination__product-item");

                // const pageLink = document.createElement("a");
                // pageLink.classList.add("pagination__link");
                pageItem.textContent = i;
                // pageLink.href = "#product";
                // pageItem.appendChild(pageLink);

                pageItem.addEventListener("click", (e) => {
                    e.preventDefault();
                    currentPage = i;
                    fetchDataAndRender(currentPage);
                    activePageItem(pageItem);
                    scrollToProductHeader(); // Cuộn lên đến tiêu đề sản phẩm
                });

                if (i === currentPage) {
                    pageItem.classList.add("active"); // Thêm class active cho trang hiện tại
                }

                paginationContainer.appendChild(pageItem);
            }
        }
    }
}
// Hàm active khi click Page
function activePageItem(pageItem) {
    // Lấy tất cả các phần tử trang
    const allPageItems = document.querySelectorAll(".pagination__product-item");
    // Xóa class active từ tất cả các pageItem
    allPageItems.forEach((item) => {
        item.classList.remove("active");
    });
    // Thêm class active phần tử được chọn
    pageItem.classList.add("active");
}

// Gọi hàm để lấy dữ liệu và render sản phẩm khi trang web được tải
document.addEventListener("DOMContentLoaded", () => {
    fetchDataAndRender(currentPage);
});
