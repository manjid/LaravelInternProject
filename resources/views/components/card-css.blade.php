<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200,300,400,500,600,700,800,900&display=swap");

.container .card-body {
  position: relative;
  width: 200px;
  height: 300px;
  margin: 20px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.container .card-body .content{
  position: absolute;
  bottom: -160px;
  width: 100%;
  height: 160px;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 10;
  flex-direction: column;
  filter: blur(15px);
  box-shadow: 0 -10px 10px rgba(0,0,0,0.1);
  border: 1px solid rgba(255,255,255,0.2);
  transition: bottom 0.5s;
  transition-delay: 0.8s;
}
.container .card-body:hover .content{
  bottom: 0px;
  transition-delay: 0s;
}
.container .card-body .content .contentBx h3{
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 500;
  font-size: 12px;
  line-height: 1.1em;
  text-align: center;
  margin: 5px 0 15px;
  transition: 0.5s;
  opacity: 0;
  transform: translateY(-20px);
  transition-delay: 0.6s;
}
.container .card-body:hover .content .contentBx h3{
  opacity: 1;
  transform: translateY(0px);
}
.container .card-body .content .contentBx h3 span{
  font-size: 9px;
  font-weight: 300;
  text-transform: initial;
}
.container .card-body .content .sci{
  position: relative;
  bottom: 10px;
  display: flex;
}
.container .card-body-body .content .sci li{
  list-style: none;
  margin:  10px;
  transform: translateY(40px);
  transition: 0.5s;
  opacity: 0;
  transition-delay: calc(0.2s * var(--i));
}
.container .card-body-body:hover .content .sci li{
  transform: translateY(0px);
  opacity: 1;
}

.container .card-body-body .content .sci li a{
  color: #fff;
}
</style>
