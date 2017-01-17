/*EXIF*/
(function(){var debug=false;var root=this;var EXIF=function(obj){if(obj instanceof EXIF){return obj}if(!(this instanceof EXIF)){return new EXIF(obj)}this.EXIFwrapped=obj};if(typeof exports!=="undefined"){if(typeof module!=="undefined"&&module.exports){exports=module.exports=EXIF}exports.EXIF=EXIF}else{root.EXIF=EXIF}var ExifTags=EXIF.Tags={36864:"ExifVersion",40960:"FlashpixVersion",40961:"ColorSpace",40962:"PixelXDimension",40963:"PixelYDimension",37121:"ComponentsConfiguration",37122:"CompressedBitsPerPixel",37500:"MakerNote",37510:"UserComment",40964:"RelatedSoundFile",36867:"DateTimeOriginal",36868:"DateTimeDigitized",37520:"SubsecTime",37521:"SubsecTimeOriginal",37522:"SubsecTimeDigitized",33434:"ExposureTime",33437:"FNumber",34850:"ExposureProgram",34852:"SpectralSensitivity",34855:"ISOSpeedRatings",34856:"OECF",37377:"ShutterSpeedValue",37378:"ApertureValue",37379:"BrightnessValue",37380:"ExposureBias",37381:"MaxApertureValue",37382:"SubjectDistance",37383:"MeteringMode",37384:"LightSource",37385:"Flash",37396:"SubjectArea",37386:"FocalLength",41483:"FlashEnergy",41484:"SpatialFrequencyResponse",41486:"FocalPlaneXResolution",41487:"FocalPlaneYResolution",41488:"FocalPlaneResolutionUnit",41492:"SubjectLocation",41493:"ExposureIndex",41495:"SensingMethod",41728:"FileSource",41729:"SceneType",41730:"CFAPattern",41985:"CustomRendered",41986:"ExposureMode",41987:"WhiteBalance",41988:"DigitalZoomRation",41989:"FocalLengthIn35mmFilm",41990:"SceneCaptureType",41991:"GainControl",41992:"Contrast",41993:"Saturation",41994:"Sharpness",41995:"DeviceSettingDescription",41996:"SubjectDistanceRange",40965:"InteroperabilityIFDPointer",42016:"ImageUniqueID"};var TiffTags=EXIF.TiffTags={256:"ImageWidth",257:"ImageHeight",34665:"ExifIFDPointer",34853:"GPSInfoIFDPointer",40965:"InteroperabilityIFDPointer",258:"BitsPerSample",259:"Compression",262:"PhotometricInterpretation",274:"Orientation",277:"SamplesPerPixel",284:"PlanarConfiguration",530:"YCbCrSubSampling",531:"YCbCrPositioning",282:"XResolution",283:"YResolution",296:"ResolutionUnit",273:"StripOffsets",278:"RowsPerStrip",279:"StripByteCounts",513:"JPEGInterchangeFormat",514:"JPEGInterchangeFormatLength",301:"TransferFunction",318:"WhitePoint",319:"PrimaryChromaticities",529:"YCbCrCoefficients",532:"ReferenceBlackWhite",306:"DateTime",270:"ImageDescription",271:"Make",272:"Model",305:"Software",315:"Artist",33432:"Copyright"};var GPSTags=EXIF.GPSTags={0:"GPSVersionID",1:"GPSLatitudeRef",2:"GPSLatitude",3:"GPSLongitudeRef",4:"GPSLongitude",5:"GPSAltitudeRef",6:"GPSAltitude",7:"GPSTimeStamp",8:"GPSSatellites",9:"GPSStatus",10:"GPSMeasureMode",11:"GPSDOP",12:"GPSSpeedRef",13:"GPSSpeed",14:"GPSTrackRef",15:"GPSTrack",16:"GPSImgDirectionRef",17:"GPSImgDirection",18:"GPSMapDatum",19:"GPSDestLatitudeRef",20:"GPSDestLatitude",21:"GPSDestLongitudeRef",22:"GPSDestLongitude",23:"GPSDestBearingRef",24:"GPSDestBearing",25:"GPSDestDistanceRef",26:"GPSDestDistance",27:"GPSProcessingMethod",28:"GPSAreaInformation",29:"GPSDateStamp",30:"GPSDifferential"};var StringValues=EXIF.StringValues={ExposureProgram:{0:"Not defined",1:"Manual",2:"Normal program",3:"Aperture priority",4:"Shutter priority",5:"Creative program",6:"Action program",7:"Portrait mode",8:"Landscape mode"},MeteringMode:{0:"Unknown",1:"Average",2:"CenterWeightedAverage",3:"Spot",4:"MultiSpot",5:"Pattern",6:"Partial",255:"Other"},LightSource:{0:"Unknown",1:"Daylight",2:"Fluorescent",3:"Tungsten (incandescent light)",4:"Flash",9:"Fine weather",10:"Cloudy weather",11:"Shade",12:"Daylight fluorescent (D 5700 - 7100K)",13:"Day white fluorescent (N 4600 - 5400K)",14:"Cool white fluorescent (W 3900 - 4500K)",15:"White fluorescent (WW 3200 - 3700K)",17:"Standard light A",18:"Standard light B",19:"Standard light C",20:"D55",21:"D65",22:"D75",23:"D50",24:"ISO studio tungsten",255:"Other"},Flash:{0:"Flash did not fire",1:"Flash fired",5:"Strobe return light not detected",7:"Strobe return light detected",9:"Flash fired, compulsory flash mode",13:"Flash fired, compulsory flash mode, return light not detected",15:"Flash fired, compulsory flash mode, return light detected",16:"Flash did not fire, compulsory flash mode",24:"Flash did not fire, auto mode",25:"Flash fired, auto mode",29:"Flash fired, auto mode, return light not detected",31:"Flash fired, auto mode, return light detected",32:"No flash function",65:"Flash fired, red-eye reduction mode",69:"Flash fired, red-eye reduction mode, return light not detected",71:"Flash fired, red-eye reduction mode, return light detected",73:"Flash fired, compulsory flash mode, red-eye reduction mode",77:"Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected",79:"Flash fired, compulsory flash mode, red-eye reduction mode, return light detected",89:"Flash fired, auto mode, red-eye reduction mode",93:"Flash fired, auto mode, return light not detected, red-eye reduction mode",95:"Flash fired, auto mode, return light detected, red-eye reduction mode"},SensingMethod:{1:"Not defined",2:"One-chip color area sensor",3:"Two-chip color area sensor",4:"Three-chip color area sensor",5:"Color sequential area sensor",7:"Trilinear sensor",8:"Color sequential linear sensor"},SceneCaptureType:{0:"Standard",1:"Landscape",2:"Portrait",3:"Night scene"},SceneType:{1:"Directly photographed"},CustomRendered:{0:"Normal process",1:"Custom process"},WhiteBalance:{0:"Auto white balance",1:"Manual white balance"},GainControl:{0:"None",1:"Low gain up",2:"High gain up",3:"Low gain down",4:"High gain down"},Contrast:{0:"Normal",1:"Soft",2:"Hard"},Saturation:{0:"Normal",1:"Low saturation",2:"High saturation"},Sharpness:{0:"Normal",1:"Soft",2:"Hard"},SubjectDistanceRange:{0:"Unknown",1:"Macro",2:"Close view",3:"Distant view"},FileSource:{3:"DSC"},Components:{0:"",1:"Y",2:"Cb",3:"Cr",4:"R",5:"G",6:"B"}};
function addEvent(element,event,handler){if(element.addEventListener){element.addEventListener(event,handler,false)}else{if(element.attachEvent){element.attachEvent("on"+event,handler)}}}function imageHasData(img){return !!(img.exifdata)}function base64ToArrayBuffer(base64,contentType){contentType=contentType||base64.match(/^data\:([^\;]+)\;base64,/mi)[1]||"";base64=base64.replace(/^data\:([^\;]+)\;base64,/gmi,"");var binary=atob(base64);var len=binary.length;var buffer=new ArrayBuffer(len);var view=new Uint8Array(buffer);for(var i=0;i<len;i++){view[i]=binary.charCodeAt(i)}return buffer}function objectURLToBlob(url,callback){var http=new XMLHttpRequest();http.open("GET",url,true);http.responseType="blob";http.onload=function(e){if(this.status==200||this.status===0){callback(this.response)}};http.send()}function getImageData(img,callback){function handleBinaryFile(binFile){var data=findEXIFinJPEG(binFile);var iptcdata=findIPTCinJPEG(binFile);img.exifdata=data||{};img.iptcdata=iptcdata||{};if(callback){callback.call(img)}}if(img.src){if(/^data\:/i.test(img.src)){var arrayBuffer=base64ToArrayBuffer(img.src);handleBinaryFile(arrayBuffer)}else{if(/^blob\:/i.test(img.src)){var fileReader=new FileReader();fileReader.onload=function(e){handleBinaryFile(e.target.result)};objectURLToBlob(img.src,function(blob){fileReader.readAsArrayBuffer(blob)})}else{var http=new XMLHttpRequest();http.onload=function(){if(this.status==200||this.status===0){handleBinaryFile(http.response)}else{throw"Could not load image"}http=null};http.open("GET",img.src,true);http.responseType="arraybuffer";http.send(null)}}}else{if(window.FileReader&&(img instanceof window.Blob||img instanceof window.File)){var fileReader=new FileReader();fileReader.onload=function(e){if(debug){console.log("Got file of length "+e.target.result.byteLength)}handleBinaryFile(e.target.result)};fileReader.readAsArrayBuffer(img)}}}function findEXIFinJPEG(file){var dataView=new DataView(file);if(debug){console.log("Got file of length "+file.byteLength)}if((dataView.getUint8(0)!=255)||(dataView.getUint8(1)!=216)){if(debug){console.log("Not a valid JPEG")}return false}var offset=2,length=file.byteLength,marker;while(offset<length){if(dataView.getUint8(offset)!=255){if(debug){console.log("Not a valid marker at offset "+offset+", found: "+dataView.getUint8(offset))}return false}marker=dataView.getUint8(offset+1);if(debug){console.log(marker)}if(marker==225){if(debug){console.log("Found 0xFFE1 marker")}return readEXIFData(dataView,offset+4,dataView.getUint16(offset+2)-2)}else{offset+=2+dataView.getUint16(offset+2)}}}function findIPTCinJPEG(file){var dataView=new DataView(file);if(debug){console.log("Got file of length "+file.byteLength)}if((dataView.getUint8(0)!=255)||(dataView.getUint8(1)!=216)){if(debug){console.log("Not a valid JPEG")}return false}var offset=2,length=file.byteLength;var isFieldSegmentStart=function(dataView,offset){return(dataView.getUint8(offset)===56&&dataView.getUint8(offset+1)===66&&dataView.getUint8(offset+2)===73&&dataView.getUint8(offset+3)===77&&dataView.getUint8(offset+4)===4&&dataView.getUint8(offset+5)===4)};while(offset<length){if(isFieldSegmentStart(dataView,offset)){var nameHeaderLength=dataView.getUint8(offset+7);if(nameHeaderLength%2!==0){nameHeaderLength+=1}if(nameHeaderLength===0){nameHeaderLength=4}var startOffset=offset+8+nameHeaderLength;var sectionLength=dataView.getUint16(offset+6+nameHeaderLength);return readIPTCData(file,startOffset,sectionLength);break}offset++}}var IptcFieldMap={120:"caption",110:"credit",25:"keywords",55:"dateCreated",80:"byline",85:"bylineTitle",122:"captionWriter",105:"headline",116:"copyright",15:"category"};function readIPTCData(file,startOffset,sectionLength){var dataView=new DataView(file);var data={};var fieldValue,fieldName,dataSize,segmentType,segmentSize;var segmentStartPos=startOffset;while(segmentStartPos<startOffset+sectionLength){if(dataView.getUint8(segmentStartPos)===28&&dataView.getUint8(segmentStartPos+1)===2){segmentType=dataView.getUint8(segmentStartPos+2);if(segmentType in IptcFieldMap){dataSize=dataView.getInt16(segmentStartPos+3);segmentSize=dataSize+5;fieldName=IptcFieldMap[segmentType];fieldValue=getStringFromDB(dataView,segmentStartPos+5,dataSize);if(data.hasOwnProperty(fieldName)){if(data[fieldName] instanceof Array){data[fieldName].push(fieldValue)}else{data[fieldName]=[data[fieldName],fieldValue]}}else{data[fieldName]=fieldValue}}}segmentStartPos++}return data}function readTags(file,tiffStart,dirStart,strings,bigEnd){var entries=file.getUint16(dirStart,!bigEnd),tags={},entryOffset,tag,i;for(i=0;i<entries;i++){entryOffset=dirStart+i*12+2;tag=strings[file.getUint16(entryOffset,!bigEnd)];if(!tag&&debug){console.log("Unknown tag: "+file.getUint16(entryOffset,!bigEnd))}tags[tag]=readTagValue(file,entryOffset,tiffStart,dirStart,bigEnd)}return tags}function readTagValue(file,entryOffset,tiffStart,dirStart,bigEnd){var type=file.getUint16(entryOffset+2,!bigEnd),numValues=file.getUint32(entryOffset+4,!bigEnd),valueOffset=file.getUint32(entryOffset+8,!bigEnd)+tiffStart,offset,vals,val,n,numerator,denominator;
switch(type){case 1:case 7:if(numValues==1){return file.getUint8(entryOffset+8,!bigEnd)}else{offset=numValues>4?valueOffset:(entryOffset+8);vals=[];for(n=0;n<numValues;n++){vals[n]=file.getUint8(offset+n)}return vals}case 2:offset=numValues>4?valueOffset:(entryOffset+8);return getStringFromDB(file,offset,numValues-1);case 3:if(numValues==1){return file.getUint16(entryOffset+8,!bigEnd)}else{offset=numValues>2?valueOffset:(entryOffset+8);vals=[];for(n=0;n<numValues;n++){vals[n]=file.getUint16(offset+2*n,!bigEnd)}return vals}case 4:if(numValues==1){return file.getUint32(entryOffset+8,!bigEnd)}else{vals=[];for(n=0;n<numValues;n++){vals[n]=file.getUint32(valueOffset+4*n,!bigEnd)}return vals}case 5:if(numValues==1){numerator=file.getUint32(valueOffset,!bigEnd);denominator=file.getUint32(valueOffset+4,!bigEnd);val=new Number(numerator/denominator);val.numerator=numerator;val.denominator=denominator;return val}else{vals=[];for(n=0;n<numValues;n++){numerator=file.getUint32(valueOffset+8*n,!bigEnd);denominator=file.getUint32(valueOffset+4+8*n,!bigEnd);vals[n]=new Number(numerator/denominator);vals[n].numerator=numerator;vals[n].denominator=denominator}return vals}case 9:if(numValues==1){return file.getInt32(entryOffset+8,!bigEnd)}else{vals=[];for(n=0;n<numValues;n++){vals[n]=file.getInt32(valueOffset+4*n,!bigEnd)}return vals}case 10:if(numValues==1){return file.getInt32(valueOffset,!bigEnd)/file.getInt32(valueOffset+4,!bigEnd)}else{vals=[];for(n=0;n<numValues;n++){vals[n]=file.getInt32(valueOffset+8*n,!bigEnd)/file.getInt32(valueOffset+4+8*n,!bigEnd)}return vals}}}function getStringFromDB(buffer,start,length){var outstr="";for(n=start;n<start+length;n++){outstr+=String.fromCharCode(buffer.getUint8(n))}return outstr}function readEXIFData(file,start){if(getStringFromDB(file,start,4)!="Exif"){if(debug){console.log("Not valid EXIF data! "+getStringFromDB(file,start,4))}return false}var bigEnd,tags,tag,exifData,gpsData,tiffOffset=start+6;if(file.getUint16(tiffOffset)==18761){bigEnd=false}else{if(file.getUint16(tiffOffset)==19789){bigEnd=true}else{if(debug){console.log("Not valid TIFF data! (no 0x4949 or 0x4D4D)")}return false}}if(file.getUint16(tiffOffset+2,!bigEnd)!=42){if(debug){console.log("Not valid TIFF data! (no 0x002A)")}return false}var firstIFDOffset=file.getUint32(tiffOffset+4,!bigEnd);if(firstIFDOffset<8){if(debug){console.log("Not valid TIFF data! (First offset less than 8)",file.getUint32(tiffOffset+4,!bigEnd))}return false}tags=readTags(file,tiffOffset,tiffOffset+firstIFDOffset,TiffTags,bigEnd);if(tags.ExifIFDPointer){exifData=readTags(file,tiffOffset,tiffOffset+tags.ExifIFDPointer,ExifTags,bigEnd);for(tag in exifData){switch(tag){case"LightSource":case"Flash":case"MeteringMode":case"ExposureProgram":case"SensingMethod":case"SceneCaptureType":case"SceneType":case"CustomRendered":case"WhiteBalance":case"GainControl":case"Contrast":case"Saturation":case"Sharpness":case"SubjectDistanceRange":case"FileSource":exifData[tag]=StringValues[tag][exifData[tag]];break;case"ExifVersion":case"FlashpixVersion":exifData[tag]=String.fromCharCode(exifData[tag][0],exifData[tag][1],exifData[tag][2],exifData[tag][3]);break;case"ComponentsConfiguration":exifData[tag]=StringValues.Components[exifData[tag][0]]+StringValues.Components[exifData[tag][1]]+StringValues.Components[exifData[tag][2]]+StringValues.Components[exifData[tag][3]];break}tags[tag]=exifData[tag]}}if(tags.GPSInfoIFDPointer){gpsData=readTags(file,tiffOffset,tiffOffset+tags.GPSInfoIFDPointer,GPSTags,bigEnd);for(tag in gpsData){switch(tag){case"GPSVersionID":gpsData[tag]=gpsData[tag][0]+"."+gpsData[tag][1]+"."+gpsData[tag][2]+"."+gpsData[tag][3];break}tags[tag]=gpsData[tag]}}return tags}EXIF.getData=function(img,callback){if((img instanceof Image||img instanceof HTMLImageElement)&&!img.complete){return false}if(!imageHasData(img)){getImageData(img,callback)}else{if(callback){callback.call(img)}}return true};EXIF.getTag=function(img,tag){if(!imageHasData(img)){return}return img.exifdata[tag]};EXIF.getAllTags=function(img){if(!imageHasData(img)){return{}}var a,data=img.exifdata,tags={};for(a in data){if(data.hasOwnProperty(a)){tags[a]=data[a]}}return tags};EXIF.pretty=function(img){if(!imageHasData(img)){return""}var a,data=img.exifdata,strPretty="";for(a in data){if(data.hasOwnProperty(a)){if(typeof data[a]=="object"){if(data[a] instanceof Number){strPretty+=a+" : "+data[a]+" ["+data[a].numerator+"/"+data[a].denominator+"]\r\n"}else{strPretty+=a+" : ["+data[a].length+" values]\r\n"}}else{strPretty+=a+" : "+data[a]+"\r\n"}}}return strPretty};EXIF.readFromBinaryFile=function(file){return findEXIFinJPEG(file)};if(typeof define==="function"&&define.amd){define("exif-js",[],function(){return EXIF})}}.call(this));

/*头像裁切逻辑类*/
$.fn.cropModal=function(option){
  var $modal=this,
    _jcrop,_imgsrc,_area,boundx,boundy,boxW,
    $pimg ,$work,xsize ,ysize ;
  //jcrop 配置
  var defaults={
    w: 300,
    h: 300,
    source:'',
    next:null
  };

  /*
   * 初始化
   */
  function init(){
      var $file=$('<input type="file">');
        $work=$('#jcrop-work');
        var $pcnt = $('#preview-pane .preview-container');
        $pimg = $('#preview-pane .preview-container img');
        xsize = $pcnt.width(),
        ysize = $pcnt.height();
      $.extend(defaults, option);  
      $modal.find('[data-crop="reload"]').click(function(){$file.click();return false;});
      $modal.find('[data-crop="finish"]').click(finish);
      $modal.find('[data-crop="upload"]').click(upload);
      $modal.find('[data-crop="close"]').click(close);
      $file.change(change);
      $(defaults.source).click(show);
    }
  /*
   * 上传文件改变
   */
  function change(){
    var file = this.files[0];
    var orientation;
    if(!file){
      return false;
    }
    if (!/image\/\w+/.test(file.type)) {
      alert("文件必须为图片！");
      return false;
    }
    EXIF.getData(file,function(){
      orientation=EXIF.getTag(this,'Orientation');
    });
    var reader = new FileReader();
    reader.onload = function(e) {	
      getImgData(this.result,orientation,function(data){
        _imgsrc = data;
        _jcrop&&_jcrop.destroy();
        jcropInit(); 
      });	
    }
    reader.readAsDataURL(file);
  }
  /*
   * 显示上传框
   */
        function show(){
           $modal.modal('show');
           boxW=$work.width();
           _imgsrc=$(defaults.source).attr('src');
           jcropInit();
           return false;
        }
        /*
         * 初始化jcrop 插件
         */
  function jcropInit(){
    $pimg.attr('src',_imgsrc);
    $work.html('<img src="'+_imgsrc+'" id="jcrop-img">');
    $('#jcrop-img').Jcrop({
      bgFade: true,
      bgOpacity: .5,
      aspectRatio: xsize / ysize,
      boxWidth:boxW,
      boxHeight:boxW,
      onChange:preview,
      onSelect: preview
    },function(){
      var bounds = this.getBounds();
      boundx = bounds[0];
      boundy = bounds[1];
      _jcrop = this; 
    });
  }
  /*
   * 结束裁切
   */
  function finish(){
    if(!_area||_area.h==0||_area.w==0){
      return;
    }
      var image=new Image();
    image.src=_imgsrc;
    var cvs = document.createElement('canvas');
      var ctx = cvs.getContext("2d");
      cvs.width = _area.w;
      cvs.height =_area.h;
      ctx.drawImage(image, _area.x, _area.y, _area.w, _area.h, 0, 0, _area.w, _area.h);
      var data= cvs.toDataURL("image/jpg", 1);  
      if (typeof defaults.next === 'function') {
          defaults.next(data);
      }
      $(defaults.source).attr('src',data);
      _jcrop.destroy();
      $modal.modal('hide');
      _area=null;
      return false;
  }

  function upload(){
    if(!_area||_area.h==0||_area.w==0){
      return;
    }
    var image=new Image();
    image.src=_imgsrc;
    var cvs = document.createElement('canvas');
    var ctx = cvs.getContext("2d");
    cvs.width = _area.w;
    cvs.height =_area.h;
    ctx.drawImage(image, _area.x, _area.y, _area.w, _area.h, 0, 0, _area.w, _area.h);
    var data= cvs.toDataURL("image/jpg", 1);
    if (typeof defaults.next === 'function') {
      defaults.next(data);
    }
    $(defaults.source).attr('src',data);
    savedate(data);


    _jcrop.destroy();
    $modal.modal('hide');
    _area=null;

    return false;
  }
/*
 * 取消裁切，关闭控件
 */
  function close(){
    _jcrop&&_jcrop.destroy();
    $modal.modal('hide');
    _area=null;
    return false;
  }
/*
 * 裁切预览
 */
  function preview(c){
    _area = c;
    if (parseInt(c.w) > 0)
      {
        var rx = xsize / c.w;
        var ry = ysize / c.h;
        $pimg.css({
          width: Math.round(rx * boundx) + 'px',
          height: Math.round(ry * boundy) + 'px',
          marginLeft: '-' + Math.round(rx * c.x) + 'px',
          marginTop: '-' + Math.round(ry * c.y) + 'px'
        });
      }
    return false;
  }


/*
  上传到应有位置
  */
/*
 *上传图片方法
 */
  function savedate(data){

    //提交数据函数
    $.ajax({                                                  //调用jquery的ajax方法
      type: "POST",                                      //设置ajax方法提交数据的形式
      url: "http://www.qijihao.com/sub/upload",                                       //把数据提交到相关位置
    //data: "username="+$('#regForm input[name=mobile]').val(),     //输入框writer中的值作为提交的数据
      data: "header="+data,
      success: function(msg){                  //提交成功后的回调，msg变量是ok.php输出的内容。
        Nmsg = eval('(' + msg + ')');
        alert(Nmsg.msg);
        /*	if(Nmsg.code==0){
          APP.alert(Nmsg.msg);
        }
        if(Nmsg.code==1){
          APP.alert(Nmsg.msg);
          window.location.href="index.php?r=home%2Findex";                      //如果有必要，可以把msg变量的值显示到某个DIV元素中
        } */
  }
        });
  }





/*
 * 读取图片的校正后数据
 */
        function getImgData(img,dir,next){
            var image=new Image();
          image.onload=function(){
              var degree=0,drawWidth,drawHeight,width,height;
              drawWidth=this.naturalWidth;
              drawHeight=this.naturalHeight;

              var maxSide = Math.max(drawWidth, drawHeight);
            if (maxSide > 1024) {
              var minSide = Math.min(drawWidth, drawHeight);
              minSide = minSide / maxSide * 1024;
              maxSide = 1024;
              if (drawWidth > drawHeight) {
                drawWidth = maxSide;
                drawHeight = minSide;
              } else {
                drawWidth = minSide;
                drawHeight = maxSide;
              }
            }
            var canvas=document.createElement('canvas');
              canvas.width=width=drawWidth;
                canvas.height=height=drawHeight; 
            var context=canvas.getContext('2d');
            switch(dir){
               case 3:
                  degree=180;
                  drawWidth=-width;
                  drawHeight=-height;
               break;
               case 6:
                  canvas.width=height;
                      canvas.height=width; 
                  degree=90;
                  drawWidth=width;
                  drawHeight=-height;
               break;
               case 8:
                  canvas.width=height;
                      canvas.height=width; 
                  degree=270;
                  drawWidth=-width;
                  drawHeight=height;
               break;
            }

              context.rotate(degree*Math.PI/180);
              context.drawImage(this,0,0,drawWidth,drawHeight);
              next(canvas.toDataURL("image/jpeg",.8));
          }
        image.src=img;
        }

      init();
}

jQuery(document).ready(function(){
  $('#jcrop-modal').cropModal({source:'#subject-img',next:function(data){

    $('#pic_url').val(data);

  }})
})

//});
