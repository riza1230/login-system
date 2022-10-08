<script type="text/javascript">

  let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

  Instascan.Camera.getCameras().then( (cameras) =>{ 
  if (cameras.length > 0) 
    { scanner.start(cameras[0]);} })
    .catch( ()=> console.log('No Camera Found.'));

  scanner.addListener('scan', function (content) {
    document.getElementById('text').value=content;
    document.forms["scanned"].submit();
  });

</script>