jQuery(document).ready(function(){
    sliderDiscover();
    menuMobile();
    handlePtbox();
    sliderQuest();
    sliderServiceResolve();
    sliderWhyChoose();
    sliderResearch();
    handleQuestTrueFalse();
    handleScrollEle();
    slideStepActivities();
    handleCheckPrivacy();
    handlePopupReadmoreInstruction();
    sliderQuestResult();
    handleInformationClient();
    handleResultScan();
    handleLoadingInPageScan();
    handleUploadPage();
});
function sliderDiscover(){
    jQuery('.sec-4-slide.owl-carousel').owlCarousel({
        loop:false,
        margin:24,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                nav:false,
            },
            769:{
                items:3
            }
        }
    })
}
function sliderQuest(){
    jQuery('.list_quest.owl-carousel').owlCarousel({
        loop:false,
        margin:24,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                nav:false,
            },
            769:{
                items:4
            }
        }
    })
}
function sliderServiceResolve(){
    jQuery('.list-service-resolve.owl-carousel').owlCarousel({
        loop:false,
        margin:24,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                nav:false,
            },
            769:{
                items:4
            }
        }
    })
}
function sliderWhyChoose(){
    jQuery('.list_why.owl-carousel').owlCarousel({
        loop:false,
        margin:24,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                nav:false,
            },
            769:{
                items:4
            }
        }
    })
}
function sliderResearch(){
    jQuery('.list-post-research.owl-carousel').owlCarousel({
        loop:false,
        margin:24,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                nav:false,
            },
            769:{
                items:4
            }
        }
    })
}
function menuMobile(){
    let barMobile = document.querySelector("#barMobile");
    let mcMenuMobContent = document.querySelector("#mcMenuMobContent");
    let cancelMenuMob = document.querySelector("#cancelMenuMob");
    if(barMobile){
        barMobile.onclick = ()=>{
            mcMenuMobContent.style.display = "block";
        }
    }
    if(cancelMenuMob){
        cancelMenuMob.onclick = ()=>{
            mcMenuMobContent.style.display = "none";
        }
    }
}
function handlePtbox(){
    let phoneImgPt = document.querySelectorAll(".phone-img-pt");
    let mcBtnOutBox = document.querySelectorAll(".mc-btn-out-box");
    if(phoneImgPt){
        phoneImgPt.forEach(element => {
            element.onclick = ()=>{
                let dataBox = element.getAttribute("data-box");
                let mcBox = document.querySelector(dataBox);
                element.style.display = "none";
                mcBox.style.display = "block";
            }
        });
    }
    if(mcBtnOutBox){
        mcBtnOutBox.forEach(element => {
            element.onclick = ()=>{
                let dataBox = element.getAttribute("data-box");
                let dataImg = element.getAttribute("data-img");
                let mcBox = document.querySelector(dataBox);
                let mcImg = document.querySelector(dataImg);
                mcImg.style.display = "none";
                mcBox.style.display = "block";
            }
        });
    }
}
function handleQuestTrueFalse(){
    let btnTrueFalse = document.querySelectorAll(".mc_click_show_answer");
    let btnBack = document.querySelectorAll(".mc_back_front");
    if(btnTrueFalse){
        btnTrueFalse.forEach(element => {
            element.onclick = ()=>{
                let idShow = element.getAttribute("data-behind");
                let domShow = document.querySelector(idShow);
                let idFront = element.getAttribute("data-front");
                let domFront = document.querySelector(idFront);
                domShow.style.display = "block";
                domFront.style.display = "none";
            }
        });
    }
    if(btnBack){
        btnBack.forEach(element => {
            element.onclick = ()=>{
                let idBehind = element.getAttribute("data-behind");
                let domBehind = document.querySelector(idBehind);
                let idFront = element.getAttribute("data-front");
                let domFront = document.querySelector(idFront);
                domBehind.style.display = "none";
                domFront.style.display = "block";
            }
        });
    }
}

function handleScrollEle(){
    let itemTitleDisContent = document.querySelectorAll(".item-title-dis-content");
    if(itemTitleDisContent){
        itemTitleDisContent.forEach(element => {
            element.onclick = ()=>{
                let idRight = element.getAttribute("data-right");
                jQuery([document.documentElement, document.body]).animate({
                    scrollTop: jQuery(idRight).offset().top
                }, 1000);
            }
        });
    }
}
function slideStepActivities(){
    jQuery('.list-step.owl-carousel').owlCarousel({
        loop:false,
        margin:0,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1,
                nav:false,
            },
            769:{
                items:1
            }
        }
    })
}

function handleCheckPrivacy(){
    let btnAcceptPrivacy = document.querySelector(".mc-btn-accept-privacy");
    let outPrivacy = document.querySelector("#outPrivacy");
    if(btnAcceptPrivacy){
        btnAcceptPrivacy.onclick = ()=>{
            let link = btnAcceptPrivacy.getAttribute("data-accpet");
            let inputPrivacy = document.querySelectorAll(".mc-check-accept-private");
            if(inputPrivacy){
                let countCheck = 0;
                inputPrivacy.forEach(element => {
                    if(element.checked){
                        countCheck = countCheck + 1;
                    }
                });
                if(countCheck == 2){
                    window.location.replace(link);
                }else{
                    alert("Bạn vui lòng đồng ý với chính sách bảo mật của chúng tôi !");
                }
            }
        }
    }
    if(outPrivacy){
        linkHome = outPrivacy.getAttribute("data-home");
        outPrivacy.onclick = ()=>{
            window.location.replace(linkHome);
        }
    }
}

function handlePopupReadmoreInstruction(){
    let readMoreInstruction = document.querySelector("#readMoreInstruction");
    let popupInstructionMore = document.querySelector("#popupInstructionMore");
    let backDropPopInstruc = document.querySelector("#backDropPopInstruc");
    let clsXButtonInstruc = document.querySelector("#clsXButtonInstruc");
    let btnInPopInstruc = document.querySelector("#btnInPopInstruc");
    if(readMoreInstruction){
        readMoreInstruction.onclick = ()=>{
            popupInstructionMore.style.display = "block";
            backDropPopInstruc.style.display = "block";
        }
    }
    if(clsXButtonInstruc){
        clsXButtonInstruc.onclick = ()=>{
            popupInstructionMore.style.display = "none";
            backDropPopInstruc.style.display = "none";
        }
    }
    if(btnInPopInstruc){
        btnInPopInstruc.onclick = ()=>{
            popupInstructionMore.style.display = "none";
            backDropPopInstruc.style.display = "none";
        }
    }
    if(backDropPopInstruc){
        backDropPopInstruc.onclick = ()=>{
            popupInstructionMore.style.display = "none";
            backDropPopInstruc.style.display = "none";
        }
    }
}

function sliderQuestResult(){
    jQuery('.slider_list_quest_nngra_mu.owl-carousel').owlCarousel({
        loop:false,
        margin:24,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1,
                nav:false,
            },
            769:{
                items:1
            }
        }
    })
}

function handleInformationClient(){
    let confirmAnswerConditionsDa = document.querySelector("#confirmAnswerConditionsDa");
    let allItemAnswer1 = document.querySelectorAll(".mc-item-answer-ifp");
    let allItemAnswer3 = document.querySelectorAll(".mc-item-three-answer-infp");
    let allItemAnswer4 = document.querySelectorAll(".mc-item-four-answer-inpf");
    if(allItemAnswer1){
        allItemAnswer1.forEach(element => {
            element.onclick = ()=>{
                allItemAnswer1.forEach(item => {
                    item.classList.remove("active");          
                });
                element.classList.add("active");
            }            
        });
    }
    if(allItemAnswer3){
        allItemAnswer3.forEach(element => {
            element.onclick = ()=>{
                allItemAnswer3.forEach(item => {
                    item.classList.remove("active");          
                });
                element.classList.add("active");
            }            
        });
    }
    if(allItemAnswer4){
        allItemAnswer4.forEach(element => {
            element.onclick = ()=>{
                allItemAnswer4.forEach(item => {
                    item.classList.remove("active");          
                });
                element.classList.add("active");
            }            
        });
    }
    if(confirmAnswerConditionsDa){
        confirmAnswerConditionsDa.onclick = ()=>{
            let ItemAnswer1 = document.querySelector(".mc-item-answer-ifp.active");
            let ItemAnswer3 = document.querySelector(".mc-item-three-answer-infp.active");
            let ItemAnswer4 = document.querySelector(".mc-item-four-answer-inpf.active");
            let answerOne = ItemAnswer1.getAttribute("data-nd");
            let answerThree = ItemAnswer3.getAttribute("data-nd");
            let answerFour = ItemAnswer4.getAttribute("data-nd");
            let yourOld = document.querySelector("#yourOld");
            let yourName = document.querySelector("#nameQuestInp");
            let yourPhone = document.querySelector("#phoneQuestInp");
            let mcNotice = document.querySelector(".mc-notice-done-info");
            if(mcNotice){
                mcNotice.style.display = "block";
            }
            let data = {
                "ho_ten": yourName.value,
                "sdt": yourPhone.value,
                "gioi_tinh":answerOne,
                "tuoi":yourOld.value,
                "have_tu_van":answerThree,
                "kho_chiu_kich_ung":answerFour,
            }
            jQuery.ajax({
                url: 'https://script.google.com/macros/s/AKfycbzNhj5SaBt6JZ0Q0DJZImNPWWJ4_hyvcRjrIYybB0qgjs1kFWvCY27m8TVuekf_BAaP/exec',
                method: "GET",
                dataType: "json",
                data: data,
                success: function (response) {
                    console.log(response);
                    if(response.result == "success"){
                        window.location.replace(confirmAnswerConditionsDa.getAttribute("data-url"));
                    }else{
                        alert("Đã có lỗi xảy ra quý khách vui lòng thử lại sau ít phút !");
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
    }
    
}

// Base64 to File image
function dataURLtoFile(dataurl, filename) {
    var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
        bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
    while(n--){
        u8arr[n] = bstr.charCodeAt(n);
    }
    return new File([u8arr], filename, {type:mime});
}
function handleResultScan(){
    let itemBtnShowResults = document.querySelectorAll(".item-btn-show-results-rsp");
    let itemResultsImgResp = document.querySelectorAll(".item-results-img-resp");
    let mcListScanImageResultsCover = document.querySelector("#mcListScanImageResultsCover");
    let mcResultLoading = document.querySelector("#mcResultLoading");
    if(mcListScanImageResultsCover){
        let listImgScan = JSON.parse(localStorage.getItem("mcar"));
        let mcPrefix = 'data:image/gif;base64,';
        let gocTraisResults = document.querySelector("#gocTrais");
        if(gocTraisResults){
            gocTraisResults.innerHTML = `<img src="${mcPrefix+listImgScan[0]}" alt="Resutls Left" />`
        } 
        let gocCenterResults = document.querySelector("#chinhsDien");
        if(gocCenterResults){
            gocCenterResults.innerHTML = `<img src="${mcPrefix+listImgScan[1]}" alt="Resutls Center" />`
        } 
        let gocRightResults = document.querySelector("#gocPhair");
        if(gocRightResults){
            gocRightResults.innerHTML = `<img src="${mcPrefix+listImgScan[2]}" alt="Resutls Right" />`
        }
        let mcFileImage = dataURLtoFile('data:image/png;base64,'+listImgScan[1],'image.jpg');
        const form = new FormData(); 
        form.append('image', mcFileImage); 
        form.append('max_face_num', '1'); 
        form.append('face_field', 'color,smooth,acnespotmole');  
        const settings = { 
            async: true, 
            crossDomain: true, 
            url: 'https://skin-analysis.p.rapidapi.com/face/effect/skin_analyze', 
            method: 'POST', 
            headers: { 
            'X-RapidAPI-Key': '1f4bdfce82msh7d30ccf2632e86cp189b1ejsn0d32bb5eb31a', 
            'X-RapidAPI-Host': 'skin-analysis.p.rapidapi.com' 
            }, 
            processData: false, 
            contentType: false, 
            mimeType: 'multipart/form-data', 
            data: form 
        };  
        jQuery.ajax(settings).done(function (response) { 
            if(response){
                let mcData = JSON.parse(response)
                let amountMunCenter = document.querySelector("#amountMunCenter");
                let qualityAcne0 = document.querySelector(".quality-arrow-0");
                let qualityAcne1 = document.querySelector(".quality-arrow-1");
                let qualityAcne2 = document.querySelector(".quality-arrow-2");
                let qualityAcne3 = document.querySelector(".quality-arrow-3");
                let qualityAcne4 = document.querySelector(".quality-arrow-4");
                if(mcData.result.face_list[0].acnespotmole.acne_num >=0 && mcData.result.face_list[0].acnespotmole.acne_num <= 2){
                    qualityAcne0.classList.add("active");
                }
                if(mcData.result.face_list[0].acnespotmole.acne_num >=3 && mcData.result.face_list[0].acnespotmole.acne_num <= 5){
                    qualityAcne1.classList.add("active");
                }
                if(mcData.result.face_list[0].acnespotmole.acne_num >=6 && mcData.result.face_list[0].acnespotmole.acne_num <= 8){
                    qualityAcne2.classList.add("active");
                }
                if(mcData.result.face_list[0].acnespotmole.acne_num >=9 && mcData.result.face_list[0].acnespotmole.acne_num <= 11){
                    qualityAcne3.classList.add("active");
                }
                if(mcData.result.face_list[0].acnespotmole.acne_num >= 12){
                    qualityAcne4.classList.add("active");
                }
                if(amountMunCenter){
                    amountMunCenter.innerHTML = mcData.result.face_list[0].acnespotmole.acne_num;
                } 
                if(mcResultLoading){
                    let progress = 0;
                    if (progress == 0) {
                        progress = 1;
                        let elem = document.getElementById("mcLoadingRollRes");
                        let currentNumberLoad = document.querySelector("#currentNumberLoad");
                        let width = 10;
                        let id = setInterval(()=>{
                            if (width >= 100) {
                                clearInterval(id);
                                progress = 0;
                                } else {
                                width++;
                                currentNumberLoad.innerHTML = width  + "%";
                                elem.style.width = width + "%";
                                }
                        }, 10);
                        }
                    setTimeout(() => {
                        mcResultLoading.style.display = "none";
                    }, 3000);
                }
            }
        }); 
    }
    if(itemBtnShowResults){
        itemBtnShowResults.forEach(element => {
            element.onclick = ()=>{
                itemBtnShowResults.forEach(item => {
                    item.classList.remove("active");
                })
                if(itemResultsImgResp){
                    itemResultsImgResp.forEach(item => {
                        item.classList.remove("active");
                    });
                }
                element.classList.add("active");
                let currentShow = document.querySelector(element.getAttribute('data-id'));
                currentShow.classList.add("active");
            }
        });
    }
    
}

function handleLoadingInPageScan(){
    let mcLoadingInScanPage = document.querySelector("#mcLoadingInScanPage");
    if(mcLoadingInScanPage){
        let pro = 0;
        if (pro == 0) {
            pro = 1;
            let elem = document.getElementById("mcLoadingRollInPageScan");
            let currentNumberLoad = document.querySelector("#currentNumberLoadInPageScan");
            let width = 10;
            let id = setInterval(()=>{
                if (width >= 100) {
                    clearInterval(id);
                    pro = 0;
                    } else {
                    width++;
                    currentNumberLoad.innerHTML = width  + "%";
                    elem.style.width = width + "%";
                    }
            }, 80);
        }
    }
    
}

const convertBase64 = (file) => {
    return new Promise((resolve, reject) => {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(file);

        fileReader.onload = () => {
            resolve(fileReader.result);
        };

        fileReader.onerror = (error) => {
            reject(error);
        };
    });
};

function handleUploadPage(){
    let uploadOne = document.querySelector("#uploadOne");
    let useImageOne = document.querySelector("#useImageOne");
    let showImageUploadOne = document.querySelector("#showImageUploadOne");
    let stepUploadOne = document.querySelector("#stepUploadOne");
    let stepUploadSecond = document.querySelector("#stepUploadSecond");

    let uploadSecond = document.querySelector("#uploadSecond");
    let showImageUploadSecond = document.querySelector("#showImageUploadSecond");
    let useImageSecond = document.querySelector("#useImageSecond");
    let stepUploadThree = document.querySelector("#stepUploadThree");
    let uploadThree = document.querySelector("#uploadThree");
    let showImageUploadThree = document.querySelector("#showImageUploadThree");
    let useImageThree = document.querySelector("#useImageThree");
    let listArrayImageUpload = [];
    if(uploadOne){
        uploadOne.onclick = ()=>{
            let fileImgOne = document.querySelector("#fileImgOne");
            if(fileImgOne){
                fileImgOne.click();
                fileImgOne.onchange = async function(event){
                    const file = event.target.files[0];
                    const base64 = await convertBase64(file);
                    const base64String = base64.replace("data:", "").replace(/^.+,/, "");
                    if(showImageUploadOne){
                        showImageUploadOne.innerHTML = `<img src="${base64}" alt="Front Face">`
                    }
                    if(useImageOne){
                        useImageOne.style.display = "block";
                        useImageOne.onclick = ()=>{
                            listArrayImageUpload.push(base64String);
                            stepUploadOne.classList.remove("active");
                            stepUploadSecond.classList.add("active");
                        }
                    }
                };
            }
        }
    }
    if(uploadSecond){
        uploadSecond.onclick = ()=>{
            let fileImgSecond = document.querySelector("#fileImgSecond");
            if(fileImgSecond){
                fileImgSecond.click();
                fileImgSecond.onchange = async function(event){
                    const file = event.target.files[0];
                    const base64 = await convertBase64(file);
                    const base64String = base64.replace("data:", "").replace(/^.+,/, "");
                    if(showImageUploadSecond){
                        showImageUploadSecond.innerHTML = `<img src="${base64}" alt="Front Face">`
                    }
                    if(useImageSecond){
                        useImageSecond.style.display = "block";
                        useImageSecond.onclick = ()=>{
                            listArrayImageUpload.push(base64String);
                            stepUploadSecond.classList.remove("active");
                            stepUploadThree.classList.add("active");
                        }
                    }
                };
            }
        }
    }
    if(uploadThree){
        uploadThree.onclick = ()=>{
            let fileImgThree = document.querySelector("#fileImgThree");
            if(fileImgThree){
                fileImgThree.click();
                fileImgThree.onchange = async function(event){
                    const file = event.target.files[0];
                    const base64 = await convertBase64(file);
                    const base64String = base64.replace("data:", "").replace(/^.+,/, "");
                    if(showImageUploadThree){
                        showImageUploadThree.innerHTML = `<img src="${base64}" alt="Front Face">`
                    }
                    if(useImageThree){
                        useImageThree.style.display = "block";
                        let noticeUploadFinished = document.querySelector("#noticeUploadFinished");
                        useImageThree.onclick = ()=>{
                            listArrayImageUpload.push(base64String);
                            localStorage.setItem('mcar', JSON.stringify(listArrayImageUpload));
                            noticeUploadFinished.style.display = "block";
                            setTimeout(()=>{
                                window.location.replace(useImageThree.getAttribute("data-url"));
                              }, 1000);
                        }
                    }
                };
            }
        }
    }
}

