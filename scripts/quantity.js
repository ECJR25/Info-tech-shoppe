const addQnty = document.querySelectorAll(".add-btn");
const minusQnty = document.querySelectorAll(".minus-btn");
const input = document.querySelectorAll(".qnty-input");
const priceJs = document.getElementsByClassName("price-js");
const subTotal = document.getElementsByClassName("subtotal-js");
const cartSubTotal = document.querySelector(".text-price");
const cartTotal = document.querySelector(".text-total");
let total = 0;
let gotVoucher = false;
let voucherValue = 0;
for(let i=0; i<addQnty.length; i++)
{
    addQnty[i].addEventListener("click", ()=>{
        let subTotalNum = 0;
        let discountedTotal = 0;

        let quantity = (Number(input[i].value));
        input[i].value = quantity + 1;

        const numericPrice = parseFloat(priceJs[i].innerText.replace('$', '').replace('.00', ''));
        total = input[i].value * numericPrice;
        subTotal[i].innerText = total;

        for(let j=0; j<subTotal.length; j++)
        {
            const numericSub = parseFloat(subTotal[j].innerText);
            subTotalNum += numericSub;
        }
        if(gotVoucher){
            let tempDiscount = subTotalNum * voucherValue;
            discountedTotal = subTotalNum - tempDiscount;
        }else{
            discountedTotal = subTotalNum;
        }
        cartSubTotal.innerText = `$${subTotalNum.toFixed(2)}`;
        cartTotal.innerText = `$${discountedTotal.toFixed(2)}`;
    })
}

for(let i=0; i<minusQnty.length; i++)
{
    minusQnty[i].addEventListener("click", ()=>{
        let subTotalNum = 0;
        let discountedTotal = 0;

        let tempQnty = 0;
        let quantity = (Number(input[i].value));
        if(input[i].value <= 1){
            input[i].value = 1;
        }else{
            input[i].value = quantity - 1;
        }

        const numericPrice = parseFloat(priceJs[i].innerText.replace('$', '').replace('.00', ''));
        total = input[i].value * numericPrice;
        subTotal[i].innerText = total;

        for(let j=0; j<subTotal.length; j++)
        {
            const numericSub = parseFloat(subTotal[j].innerText);
            subTotalNum += numericSub;
        }
        if(gotVoucher){
            let tempDiscount = subTotalNum * voucherValue;
            discountedTotal = subTotalNum - tempDiscount;
        }else{
            discountedTotal = subTotalNum;
        }

        cartSubTotal.innerText = `$${subTotalNum.toFixed(2)}`;
        cartTotal.innerText = `$${discountedTotal.toFixed(2)}`;
    })
}

const voucher = document.querySelector(".voucher");
const voucherBtn = document.querySelector(".voucher-btn");

voucherBtn.addEventListener("click", ()=>{

    if(!gotVoucher){
        if(voucher.value === "jhybosit"){
            Swal.fire({
                title: "You got 10% off!",
                text: "",
                icon: "success"
              });
              gotVoucher = true;
              voucherValue = 0.1;
              discounted();
        }else if(voucher.value === "jhyra mae marie mariano"){
            Swal.fire({
                title: "You got 15% off!",
                text: "",
                icon: "success"
              });
              gotVoucher = true;
              voucherValue = 0.15;
              discounted();
        }else{
            Swal.fire({
                title: "Invalid coupon code!",
                text: "Please try another coupon code!",
                icon: "warning"
              });
        }
    }else{
        Swal.fire({
            title: "Voucher already used!",
            text: "You can use voucher only once.",
            icon: "info"
          });
    }
})

function discounted()
{
    let discountDiv = document.querySelector(".discount");
    let totalText = parseFloat(cartTotal.innerText.replace('$', '').replace('.00', ''));
    let tempDiscount = totalText * voucherValue;
    totalText -= tempDiscount;

    cartTotal.innerText = `$${totalText}`;
    if(voucherValue == 0.1){
        discountDiv.innerText = "10%";
    }else{
        discountDiv.innerText = "15%";
    }
}

