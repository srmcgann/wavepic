<?
  $url = isset($_GET['i']) && strlen($_GET['i']) > 5 ? str_replace('https:/', 'https://', $_GET['i']): 'https://jsbot.cantelope.org/uploads/2b2Ebj.jpg';
?>
<!DOCTYPE html>
<html>
  <head>
	  <style>
      body, html{
        margin: 0;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        background: #000;
      }
      #c{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        background: url(138BkZ.jpg);
        background-position: center center;
        background-size: fill;
        transform: translate(-50%, -50%);
      }
		</style>
	</head>
  <body>
	  <canvas id=c></canvas>
	  <script>
c=document.querySelector('#c')
      c=document.querySelector('#c')
      x=c.getContext('2d')
      S=Math.sin
      C=Math.cos
      t=playing=0
      window.onclick=()=>{if(!playing)mp3.play()}
      rsz=window.onresize=()=>{
        setTimeout(()=>{
          if(document.body.clientWidth > document.body.clientHeight*1.77777778){
            c.style.height = '100vh'
            setTimeout(()=>c.style.width = c.clientHeight*1.77777778+'px',0)
          }else{
            c.style.width = '100vw'
            setTimeout(()=>c.style.height = c.clientWidth/1.77777778 + 'px',0)
          }
          c.width=1920
          c.height=c.width/1.777777778
        },0)
      }
      rsz()

Draw=()=>{
  if(!t){
    go=playing=false
    mp3 = new Audio()
    mp3.loop=true
    mp3.onplaying=()=>{playing=true}
    mp3.oncanplay=()=>{go=true;if(!playing)mp3.play()}
    mp3.src='https://audiocloud.dweet.net/audio/d5bca9c2b570366d930d52cd4a44b566.MP3'
    Rn=Math.random
    R=(Rl,Pt,Yw)=>{X=S(p=(A=(M=Math).atan2)(X,Y)+Rl)*(d=(H=M.hypot)(X,Y)),Y=C(p)*d,Y=S(p=A(Y,Z)+Pt)*(d=H(Y,Z)),Z=C(p)*d,X=S(p=A(X,Z)+Yw)*(d=H(X,Z)),Z=C(p)*d}
  Q=q=>[960+X/Z*h,540+Y/Z*h]

        w=1920/4
        h=1080/4
      c.width=w
      c.height=h
      d1=d2=x.createImageData(w,h)
      tc = document.createElement('canvas')
      tc.width = c.width
      tc.height = c.height
      tcx = tc.getContext('2d')
      artist = new Image()
      frame = new Image()
      go1=go2=false

      artist.onload=()=>{
        go2=true
        if(go1){
          tcx.drawImage(artist,0,0,w,h)
          tcx.drawImage(frame,0,0,w,h)
          d1=tcx.getImageData(0,0,w,h)
          d2=tcx.getImageData(0,0,w,h)
       }
      }
      frame.onload=()=>{
        go1=true
				if(go2){
          tcx.drawImage(artist,0,0,w,h)
          tcx.drawImage(frame,0,0,w,h)
          d1=tcx.getImageData(0,0,w,h)
          d2=tcx.getImageData(0,0,w,h)
       }
	   }
      artist.src = '/imgProxy.php?url=<?=$url?>'
      frame.src = '/imgProxy.php?url=https://jsbot.cantelope.org/uploads/ARo3t.png'
    }

    if(go1 && go2){
       c.width=w
      c.height=h
     for(i=0;i<d2.data.length;i+=4){
        j=i/4|0
        X=j%c.width
        Y=j/c.width|0
        d=Math.hypot(c.width/2-X,c.height/2-Y)
        p=Math.atan2(c.width/2-X,c.height/2-Y)
        s=15//(1+d/2000)
        tx=X+S(q=p)*(m=(1+S(d/(30+S(t)*25)-t*20)/2)*s*Math.min(1,d/100))
        ty=Y+C(q)*m
        n=((ty|0)*c.width+(tx|0))*4
        d1.data[i+0]=d2.data[n+0]
        d1.data[i+1]=d2.data[n+1]
        d1.data[i+2]=d2.data[n+2]
        //d1.data[i+3]=d2.data[n+3]
      }
      x.putImageData(d1,0,0)
    }

  t+=1/60
  requestAnimationFrame(Draw)
}
Draw()
</script>
	</body>
</html>
