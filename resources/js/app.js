// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
});

// translate

let replaceText = document.querySelector('div.skiptranslate')
replaceText.replace('Powered by ', 'Anna me la chupa');


