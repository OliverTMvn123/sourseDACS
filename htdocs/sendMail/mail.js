const  container = document.querySelector("#container");
const fileInput = document.querySelector("#input-field");

async function init(){
    await faceapi.nets.ssdMobilenetv1.loadFromUri('../API-FACE/models')
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