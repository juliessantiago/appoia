
<!DOCTYPE html>
<html>
  <head>
    <script src='https://8x8.vc/vpaas-magic-cookie-ce4ec617270641c8a072e2e3265ca160/external_api.js' async></script>
    <style>html, body, #jaas-container { height: 100%; }</style>
    <script type="text/javascript">
        let url = window.location.pathname
        let string =   url.split('/voluntario/preMeetingVoluntario/')[1]; //retorna somente parte da url que contém a string do link
        // console.log(pedaco)
      window.onload = () => {
        const api = new JitsiMeetExternalAPI("8x8.vc", {
          roomName: "vpaas-magic-cookie-ce4ec617270641c8a072e2e3265ca160/"+string,
          parentNode: document.querySelector('#jaas-container'),
                        // Make sure to include a JWT if you intend to record,
                        // make outbound calls or use any other premium features!
                        // jwt: "eyJraWQiOiJ2cGFhcy1tYWdpYy1jb29raWUtY2U0ZWM2MTcyNzA2NDFjOGEwNzJlMmUzMjY1Y2ExNjAvODRkNTNmLVNBTVBMRV9BUFAiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJqaXRzaSIsImlzcyI6ImNoYXQiLCJpYXQiOjE3MjExMDcyNzQsImV4cCI6MTcyMTExNDQ3NCwibmJmIjoxNzIxMTA3MjY5LCJzdWIiOiJ2cGFhcy1tYWdpYy1jb29raWUtY2U0ZWM2MTcyNzA2NDFjOGEwNzJlMmUzMjY1Y2ExNjAiLCJjb250ZXh0Ijp7ImZlYXR1cmVzIjp7ImxpdmVzdHJlYW1pbmciOmZhbHNlLCJvdXRib3VuZC1jYWxsIjpmYWxzZSwic2lwLW91dGJvdW5kLWNhbGwiOmZhbHNlLCJ0cmFuc2NyaXB0aW9uIjpmYWxzZSwicmVjb3JkaW5nIjpmYWxzZX0sInVzZXIiOnsiaGlkZGVuLWZyb20tcmVjb3JkZXIiOmZhbHNlLCJtb2RlcmF0b3IiOnRydWUsIm5hbWUiOiJUZXN0IFVzZXIiLCJpZCI6Imdvb2dsZS1vYXV0aDJ8MTAyNzQxNzQ1NDIxNzkyMDQ4NzI4IiwiYXZhdGFyIjoiIiwiZW1haWwiOiJ0ZXN0LnVzZXJAY29tcGFueS5jb20ifX0sInJvb20iOiIqIn0.A-31IIDqwbW6zeklsrZPxCjDEn8B8KVuYRYeO9o44cBQGEtc4yj1bEz8QRIvl_DFjFS3_iz3_CsrkYf1dlbYy_7RWx5T4AGtjvy1OwQUqvfLPNnSbICcnAHAUmlStOv4k2rNhmon6rASoyq_BD8rZRLVhz5SbgdGPOX1LeAF-JmX1x96Lx6aPaC6p7FHzb2Z6_iEk4JLfs5x_9J28xrH-mPYaH2LyvM-LiSbS_LW-40tP2R7Y9Jq9L6SWrE1TXTcvXKHJD0etiAUOJKptVjG7fskLfbslfMooZD9BqIVyoCu08PYQfuE77ZmgGLCZJdoQ3pz5JTrzwKkgBNjK35cZg"
        });
      }
    </script>
  </head>
  <body><div id="jaas-container" /></body>
</html>
