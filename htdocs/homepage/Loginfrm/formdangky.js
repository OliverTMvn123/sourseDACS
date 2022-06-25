function validateForm() {
    /*var u = document.getElementById("yourname");
    var n = document.getElementById("phonenumber");
    var addr = document.getElementById("addr");
    var p1 = document.getElementById("password");
    var p2 = document.getElementById("password-repeat");
    var m = document.getElementById("email");
    if (u.value == "") {
        alert("Vui lòng nhập tên!");
        return false;
    }
    if (addr.value == "") {
        alert("Vui lòng nhập địa chỉ!");
        return false;
    }
    if (p1.value == "") {
        alert("Vui lòng nhập mật khẩu!");
        return false;
    }

    if (p2.value == "") {
        alert("Vui lòng nhập lại mật khẩu!");
        return false;
    }

    if (n.value == "") {
        alert("Vui lòng nhập số điện thoại!");
        return false;
    }

    if (m.value == "") {
        alert("Vui lòng nhập địa chỉ mail!");
        return false;
    }

    alert("Xin hãy điền đầy đủ thông tin!")

    return true;
    */
}
const  container = document.querySelector("#container");
const fileInput = document.querySelector("#input-field");

async function init(){
    await faceapi.nets.ssdMobilenetv1.loadFromUri('../../API-FACE/models')
}
init();
fileInput.addEventListener('change', async (e)=>{
            const file = fileInput.files[0];

            const image = await faceapi.bufferToImage(file);
            const canvas = faceapi.createCanvasFromMedia(image);

            container.innerHTML=''
            container.append(image);
            container.append(canvas);

            const size={
                width: image.width,
                height: image.height,
            }
            faceapi.matchDimensions(canvas,size)
            const detections = await faceapi.detectAllFaces(image)
            const resizeDetections =faceapi.resizeResults(detections,size);
            faceapi.draw.drawDetections(canvas,resizeDetections);
})

