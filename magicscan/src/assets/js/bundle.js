import React, {useRef, useState, useCallback} from 'react' // nạp thư viện react
import ReactDOM from 'react-dom' // nạp thư viện react-dom
import * as tf from "@tensorflow/tfjs";
import * as facemesh from "@tensorflow-models/face-landmarks-detection";
import Webcam from "react-webcam";
import { drawMesh } from './components/utilities';

// Tạo component App
function App() {
    // Setup references
  const webcamRef = useRef(null);
  const canvasRef = useRef(null);
  const [checkCap, setCheckCap] = useState(true);
  const [classHide, setClassHide] = useState('');
  const [showNextButton, setShowNextButton] = useState('');

  const [listImage, setListImage] = useState([]);
  const [rightSide, setRightSide] = useState(<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <circle cx="39.9993" cy="40.0001" r="33.3333" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M53.3629 30H53.333" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M49.999 46.6667C53.0397 48.6908 57.8809 50.0001 63.3336 50.0001C67.086 50.0001 68.8807 49.3798 71.6657 48.3334" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>);
  const [centerSide, setCenterSide] = useState(<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
    <path d="M33.334 50C35.2634 51.0557 37.5497 51.6667 40.0007 51.6667C42.4516 51.6667 44.7379 51.0557 46.6673 50" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M30.0224 36.6667H30M50 36.6667H49.9776" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M6.66699 40.0001C6.66699 58.4096 21.5908 73.3334 40.0003 73.3334C58.4098 73.3334 73.3337 58.4096 73.3337 40.0001C73.3337 21.5906 58.4098 6.66675 40.0003 6.66675C21.5908 6.66675 6.66699 21.5906 6.66699 40.0001Z" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>);
const [leftSide, setLeftSide] = useState(<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
<path d="M6.66699 40.0001C6.66699 58.4096 21.5908 73.3334 40.0003 73.3334C58.4098 73.3334 73.3337 58.4096 73.3337 40.0001C73.3337 21.5906 58.4098 6.66675 40.0003 6.66675C21.5908 6.66675 6.66699 21.5906 6.66699 40.0001Z" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M26.6406 30H26.6705" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M30.0007 46.6667C26.96 48.6908 22.1188 50.0001 16.6661 50.0001C12.9136 50.0001 11.119 49.3798 8.33398 48.3334" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
</svg>);
  let numberCount = 1;

  // create a capture function
  const capture = useCallback(() => {
    const imageSrc = webcamRef.current.getScreenshot();
    const base64String = imageSrc.replace("data:", "").replace(/^.+,/, "");
    const mcPrefix = 'data:image/png;base64,';
    setListImage(oldArray => [...oldArray, base64String]);
    numberCount = numberCount + 1;
    if(numberCount == 2){
      setLeftSide(<img src={imageSrc} alt='Left Side Image' />);
      document.getElementById("itemSideIcon2").classList.remove("current");
      document.getElementById("itemSideIcon3").classList.add("current");
    }else if(numberCount == 3){
      setCenterSide(<img src={imageSrc} alt='Center Side Image' />);
      document.getElementById("itemSideIcon3").classList.remove("current");
      document.getElementById("itemSideIcon4").classList.add("current");
    }else if(numberCount == 4){
      setRightSide(<img src={imageSrc} alt='Right Side Image' />);
      document.getElementById("itemSideIcon4").classList.remove("current");
      setClassHide('hidden');
      setShowNextButton('active');
    }
    setCheckCap(false);
  }, [webcamRef]);

  // Load facemesh
  const runFacemesh = async () =>{
    const net = await facemesh.load(facemesh.SupportedPackages.mediapipeFacemesh);
    if(checkCap == true){
      setInterval(() => {
        detect(net);
      }, 100);
    }
    
  }

  // Detect function
  const detect = async (net) =>{
    if(typeof webcamRef.current !== "undefined" && webcamRef.current !== null && webcamRef.current.video.readyState===4){
      // Get Video Properties
      const video = webcamRef.current.video;
      const videoWidth = webcamRef.current.video.videoWidth;
      const videoHeight = webcamRef.current.video.videoHeight;

      // Set video width
      webcamRef.current.video.width = videoWidth;
      webcamRef.current.video.height = videoHeight;

      // Set canvas width
      canvasRef.current.width = videoWidth;
      canvasRef.current.height = videoHeight;

      // Make Detections
      const face = await net.estimateFaces({input:video});
      // console.log(face);
      if(face){
        let mcLoadingInScanPage = document.querySelector("#mcLoadingInScanPage");
          if(mcLoadingInScanPage){
            mcLoadingInScanPage.style.display = "none";
          }
      }
       // Get canvas context for drawing
       const ctx = canvasRef.current.getContext("2d");
      drawMesh(face, ctx);
    }
  };
  const videoConstraints = {
    width: 358,
    height: 458,
  };
  runFacemesh();

  const handleListImage = ()=>{
    localStorage.setItem('mcar', JSON.stringify(listImage));
    let mcNoticeDoneCapture = document.querySelector(".mc-notice-capture-done");
    if(mcNoticeDoneCapture){
      mcNoticeDoneCapture.style.display = "block";
    }
    setTimeout(()=>{
      window.location.replace("http://localhost:3000/information-client");
    }, 1000);
  }

    return (
      <div className="mc-app-scan-build">
            <div className='mc-app-scan-build-head'>
              <Webcam height={458} width={358} videoConstraints={videoConstraints} screenshotFormat="image/jpeg" ref={webcamRef} style={
                {
                  width: '100%',
                  height: 458,
                  objectFit: 'cover',
                }
              } />
              <canvas
                  ref={canvasRef}
                />
          </div>
          <div className='note-cam'>
            Vui lòng chụp ảnh ở nơi có đủ ánh sáng
          </div>
          <div className='side-face'>
              <div className='item-side-face'>
                <div className='item-side-icon current' id='itemSideIcon2'>
                  {leftSide}
                </div>
                <div className='txt-side'>
                  Góc trái
                </div>
              </div>
              <div className='item-side-face'>
                <div className='item-side-icon' id='itemSideIcon3'>
                  {centerSide}
                </div>
                <div className='txt-side'>
                  Góc chính diện
                </div>
              </div>
              <div className='item-side-face'>
                <div className='item-side-icon' id='itemSideIcon4'>
                  {rightSide}
                </div>
                <div className='txt-side'>
                  Góc phải
                </div>
              </div>
          </div>
          <button onClick={capture} className={`btn-capture ${classHide}`}>
              <p>
                <img src="../wp-content/themes/magicscan-theme/assets/images/icon-capture.png" alt="Icon" />
              </p>
          </button>
          <p className={`text-capture ${classHide}`}>Chụp</p>
          <div className='mc-notice-capture-done'>
              Bạn vui lòng đợi trong giây lát !
          </div>
          <button onClick={handleListImage} className={`btn-next-step ${showNextButton}`}>Tiếp theo</button>
      </div>
    )
}

// Render component App vào #root element
if(document.getElementById('root')){
  ReactDOM.render(<App />, document.getElementById('root'))
}
