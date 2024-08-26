
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
        // console.log(string)
        const api = new JitsiMeetExternalAPI("8x8.vc", {
          roomName: "vpaas-magic-cookie-ce4ec617270641c8a072e2e3265ca160/"+string+".lang=ptBR",
          parentNode: document.querySelector('#jaas-container'), 
          configOverwrite: {
             defaultLanguage: 'pt-BR' 
          },
        });
      }
    </script>
  </head>
  <body><div id="jaas-container" /></body>
</html>
