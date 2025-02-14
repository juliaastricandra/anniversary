<!DOCTYPE html>
<html lang="en">
  <!-- 
  Yang mau tanpa wm, custom tampilan, bisa order web ucapan di Deka Tutorial (DM IG)
  Youtube: Deka Tutorial
  Tiktok: @deka_tutorial
  Instagram: @deka_tutorial
  -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hai Sayangku</title>
    <?php date_default_timezone_set("Asia/Jakarta"); if(isset($_POST['sayang'])){ $fp = fopen('dekatutorial.txt', 'a'); fwrite($fp, " <div> <p><span>Waktu</span> : ".date("d-M-Y (H:i)")."</p> <p><span>Sayang</span> : ".$_POST["sayang"]."</p> <p><span>Kangen</span> : ".$_POST["kangen"]."</p> <p><span>Pesan</span> : ".$_POST["pesan"]."</p> </div> "); fclose($fp); } if(isset($_GET['jawaban'])){ $fp = fopen('dekatutorial.txt', 'r'); echo ' <link rel="stylesheet" href="https://dekatutorial.github.io/19gombal/styleJawaban.css" /> </head> <body> <header> </header> '; while(!feof($fp)){ echo fgets($fp); } echo ' </body> </html> '; fclose($fp); die; } ?>
    <script src="https://dekatutorial.github.io/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://dekatutorial.github.io/19gombal/scriptDT.js"></script>
    <link rel="stylesheet" href="https://dekatutorial.github.io/19gombal/style.css" />
  </head>
  <body><div class="preload"><p>Loading dulu . . .</p></div>
    <div class="content">
      <button>Klik Aku</button>
    </div>
    <script>

      musik = "music.mp3";

      window.addEventListener("load", (event) => { var load = document.querySelector(".preload"); load.style = "opacity: 0; transition: .5s ease all;"; setTimeout(() => { load.style.display = "none"; }, 500); }); document.querySelector("button").addEventListener("click", start); var musikku = new Audio(musik); musikku.loop = true; popupku();
      async function start() {
        musikku.play();
        formKu();
        inputSayang = document.querySelectorAll("input")[0];
        inputKangen = document.querySelectorAll("input")[1];
        inputPesan = document.querySelectorAll("input")[2];
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akuadapertanyaan.gif",
          title: "Hallo sayangku!",
          text: "Dudut ada pertanyaan nih buat bebi",

        });
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/jawabyangjujur.gif",
          title: "Jawab yang jujur",

        });
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/awasajakaloboong.gif",
          title: "Awas aja kalo boong",

        });
        sayangGak();
      }

      function sayangGak() {
        dekatutorial
          .fire({ showDenyButton: true,

            imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/kamusayanggak.gif",
            title: "Bebi sayang gak sama dudut?",
            denyButtonText: "Gak!",
            confirmButtonText: "Sayang",
            
          })
          .then((e) => {
            if (e.isConfirmed) {
              dekatutorial
                .fire({

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akujugasayang.gif",
                  title: "Dudut juga sayang sama bebiii",

                })
                .then(() => {
                  seberapaSayang();
                });
            } else {
              dekatutorial
                .fire({ showDenyButton: true,

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/yakinihgasayang.gif",
                  title: "Yakin nih ga sayang sama Dudut?",
                  denyButtonText: "Gak!",
                  confirmButtonText: "Sayang",

                })
                .then((e) => {
                  if (e.isConfirmed) {
                    dekatutorial
                      .fire({

                        imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akujugasayang.gif",
                        title: "Dudut juga sayang sama bebiii",

                      })
                      .then(seberapaSayang);
                  } else {
                    dekatutorial
                      .fire({

                        imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/yaudah.gif",
                        title: "Ya udah :(",

                      })
                      .then(kangenGak);
                  }
                });
            }
          });
      }

      async function seberapaSayang() {
        var { value: syg } = await dekatutorial.fire({

          title: "Seberapa sayang emangnya?",
          inputLabel: "Antara 1 - 100",

          input: "range",
          confirmButtonText: "Kirim",
          inputValue: 50,
          inputAttributes: {
            min: 1,
            max: 100,
            step: 1,
          },
        });
        inputSayang.setAttribute("value", syg + "%");
        await dekatutorial
          .fire({

            imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/makasihyaudahsayang.gif",
            title: "Makasih yahh udah sayang sama dudut " + syg + "%",

          })
          .then(() => {
            kangenGak();
          });
      }

      async function kangenGak() {
        await dekatutorial
          .fire({ showDenyButton: true,

            imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/kamukangengak.gif",
            title: "Bebi kangen gak sama dudut?",
            denyButtonText: "Gak!",
            confirmButtonText: "Kangen :(",
            
          })
          .then((e) => {
            if (e.isConfirmed) {
              inputKangen.setAttribute("value", "Iya");
              dekatutorial
                .fire({

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akujugakangen.gif",
                  title: "Dudut juga kangen bebiii",

                })
                .then(adaPesanGak);
            } else {
              dekatutorial
                .fire({

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/jahatgakangen.gif",
                  title: "Jahat banget gak kangen sama pacar sendiri",

                })
                .then(adaPesanGak);
            }
          });
      }

      async function adaPesanGak() {
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/terakhirdehsayang.gif",
          title: "Terakhir deh bebi",
          
        });
        await dekatutorial
          .fire({ showDenyButton: true,

            imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/adapesangak.gif",
            title: "Ada pesan buat dudut gak?",
            denyButtonText: "Gak!",
            confirmButtonText: "Ada dong",
            
          })
          .then(async (e) => {
            if (e.isConfirmed) {
              var { value: pesan } = await dekatutorial.fire({

                title: "Apa pesannya?",
                input: "text",

              });
              if (pesan) {
                inputPesan.setAttribute("value", pesan);
              } else {
                await dekatutorial.fire({

                  imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/yaudahkalogaada.gif",
                  title: "Ya udah kalo gak jadi",

                });
              }
            } else {
              await dekatutorial.fire({

                imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/yaudahkalogaada.gif",
                title: "Ya udah kalo gak ada",

              });
            }
          });
        kirim();
        pesanAkhir();
      }

      async function pesanAkhir() {
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/makasihudahjawab.gif",
          title: "Makasih udah jawab jujur yah sayangku",

        });
        await dekatutorial.fire({

          imageUrl: "https://dekatutorial.github.io/19gombal/stikerkuy/akujugasayang.gif",
          title: "Mmwuaaach",

        });
      }
    </script>
  </body>
</html>




