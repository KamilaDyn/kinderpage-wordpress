jQuery(document).ready(function ($) {

  var searchField = $('#search-term');
  var divResults = $('#search-overlay__results');
  var typingTimer;
  var previousValue;
  openOverlay();
  closeOverlay();
  typingAction();


  function getResults() {
    $.getJSON(`${kindergardenData.root_url}/wp-json/kindergarden/v1/search?term=${searchField.val()}`, results => {
      divResults.append(`
        <div id="search-output">
        <h3 class="py-3 text-center"> Wyniki wyszukiwania</wyh3>
        <div class="col-12 d-flex flex-row m-auto pt-3 justify-content-center  flex-wrap">
        <div class="col-12 col-sm-6 col-lg-4 px-2 my-3">
        <h4>Wpisy oraz strony</h4>
        <hr class="my-0">
        ${results.generalInfo.length ? `<ul class="list-group list-group-flush">` : `<p class="bg-white py-2 px-4 mt-0">Brak  wyników</p>`}
        ${results.generalInfo.map(item=> `<li class="list-group-item"><h5><a href="${item.permalink}">${item.title} ${item.postType == 'post' ? `<span>autor: ${item.authorName}</span>` : `` }</a></h5></li>`).join('')}
        ${results.generalInfo.length ? '</ul>' : ' '}
        </div>
        <div class="col-12 col-sm-6 col-lg-4 px-2 my-3 ">
        <h4>Grupy</h4>
        <hr class="my-0">
        ${results.grupy.length ? `<ul class="list-group list-group-flush w-100">` : `<p class="w-100 bg-white py-3 px-4 mt-0">Brak wyników</p>`}
        ${results.grupy.map(item=> `<li class="list-group-item"><h5><a href="${item.permalink}">${item.title}</a></h5></li>`).join('')}
        ${results.grupy.length ? '</ul>' : ' '}
        </div>
        <div class="col-12 col-sm-6 col-lg-4 px-2 my-3 ">
        <h4> Wydarzenia</h4>
        <hr class="my-0">
        ${results.events.length ? `<ul class="list-group list-group-flush">` : `<p class="bg-white py-3 px-4 mt-0">Brak  wyników</p>`}
        ${results.events.map(item=> `<li class="list-group-item"><h5><a href="${item.permalink}">${item.title}. </a><span class="text-black-50">Dnia: ${item.date}</span></h5></li>`).join('')}
        ${results.events.length ? '</ul>' : ' '}
        </div>
        <div class="col-12 col-sm-6 col-lg-4 px-2 my-3">
        <h4> Oferty</h4>
        <hr class="my-0">
        ${results.oferty.length ? `<ul class="list-group list-group-flush">` : `<p class="bg-white py-3 px-4 mt-0">Brak  wyników</p>`}
        ${results.oferty.map(item=> `<li class="list-group-item"><h5><a href="${item.permalink}">${item.title}</a></h5></li>`).join('')}
        ${results.oferty.length ? '</ul>' : ' '}
        </div>
        <div class="col-12 col-sm-6 col-lg-4 px-2 my-3">
        <h4> Kadra </h4>
        <hr class="my-0">
        ${results.kadra.length ? `<ul class="list-group list-group-flush">` : `<p class="bg-white py-3 px-4 mt-0">Brak  wyników</p>`}
        ${results.kadra.map(item=> `<li class="list-group-item"><a href="${item.permalink}"><div class="d-flex justify-content-around"><h5 class="col-5">${item.title}</h5><img class="col-5" alt="zdjecie ${item.title}" src="${item.image}"></div></a>
   
        </li>`).join('')}
        ${results.kadra.length ? '</ul>' : ' '}
        </div>
        </div>
        </div>
        `)
    })

    $('#spinner').remove();
  }


  // open by s-key and close by esc-key
  $(document).on('keyup', function (e) {
    if (e.keyCode == 83 && !($('.search-overlay').hasClass('search-overlay--active'))) {
      $('.search-overlay').addClass('search-overlay--active');
      $('body').addClass('body-no-scroll');
      setTimeout(() =>
        searchField.focus(), 301)
      e.preventDefault();
    }

    if (e.keyCode == 27 && $('.search-overlay').hasClass('search-overlay--active')) {
      $('.search-overlay').removeClass('search-overlay--active');
    }
  })
  // typing logic
  function typingAction() {
    searchField.on('keyup', function () {
      if (searchField.val() != previousValue) {
        clearTimeout(typingTimer);
        $('#search-output').remove();
        if (searchField.val()) {
          if (!($('#spinner').length)) {
            divResults.append("<div id='spinner' class=' spinner-border text-danger' role='status'><span class='sr-only'>Loading...</span></div>");
          }
          typingTimer = setTimeout(function () {
            getResults()
          }, 1000);
        } else {
          $('#search-output').remove();
          $('#spinner').remove()

        }
      }
      previousValue = searchField.val();

    })
  }

  function openOverlay() {
    $('#search').on('click', (e) => {
        $('.search-overlay').addClass('search-overlay--active');
        $('body').addClass('body-no-scroll');

        setTimeout(() =>
          searchField.focus(), 301)
        e.preventDefault();
      }

    )
  }

  function closeOverlay() {
    $('.search-overlay__close').on('click', function () {
      $('.search-overlay').removeClass('search-overlay--active');
      $('body').removeClass('body-no-scroll');
    })
  }

})