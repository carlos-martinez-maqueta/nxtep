$(document).ready(function () {

    const apiAreasUrl = 'api/areas.php';
    const apiTemasUrl = 'api/temas.php';
    const apiMentoresUrl = 'api/mentores.php';

    const navTabAreasContainer = document.getElementById('nav_tab_areas');
    const navTabTemasContainer = document.getElementById('nav_tab_temas');
    const mentoresAreasCardsContainer = document.getElementById('mentoresAreasCardsContainer');
    const mentoresTemasCardsContainer = document.getElementById('mentoresTemasCardsContainer');


    // Ejecutar la lógica de la aplicación
    (async () => {
        const areasList = await fetchData(apiAreasUrl);
        const temasList = await fetchData(apiTemasUrl);
        const mentoresList = await fetchData(apiMentoresUrl);

        if (areasList.length > 0) {
            buildNavTabsArea(areasList, navTabAreasContainer, apiMentoresUrl);
            buildNavTabsTema(temasList, navTabTemasContainer, apiMentoresUrl);
            buildMentorCard(mentoresList, mentoresAreasCardsContainer);
            buildMentorCard(mentoresList, mentoresTemasCardsContainer);
        }
    })();

    $("#mentorias_form").on('submit', function (e) { e.preventDefault() });

    // Manejar el evento de entrada en el cuadro de búsqueda
    $('#search_input').on('input', function (e) {
        e.preventDefault();
        buscarMentor(apiMentoresUrl, e.target.value)
    });

});

// Función para hacer la petición a la API y procesar los datos
async function fetchData(url) {
    try {
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(`Error: ${response.message}`);
        }

        const data = await response.json();
        return data.data;
    } catch (error) {
        console.error('Error en la petición:', error.message);
        return [];
    }
};

// Función para construir las tabs para cada área
function buildNavTabsArea(dataList, elementId, mentoresUrl) {
    let temp = `<input type="radio" class="area_radio d-none" id="radio_0" name="filter_area" checked value="">
                    <label for="radio_0" class="nav-link col nav_tab_filter" onclick="filtrarMentores('${mentoresUrl}', 'filter_area', 0)">Todos</label>`;
    dataList.forEach(item => {
        const cardHtml = `<input type="radio" class="area_radio d-none" id="radio_${item.id}" name="filter_area" value="${item.id}">
                            <label for="radio_${item.id}" class="nav-link col nav_tab_filter" onclick="filtrarMentores('${mentoresUrl}', 'filter_area', ${item.id})">${item.title_area}</label>`;
        temp += cardHtml;
    });
    elementId.innerHTML = temp;
};

// Función para construir las tabs para cada tema
function buildNavTabsTema(dataList, elementId, mentoresUrl) {
    let temp = `<input type="radio" class="tema_radio d-none" id="radio_tema_0" name="filter_tema" checked value="">
                    <label for="radio_tema_0" class="nav-link col d-flex align-items-center justify-content-center nav_tab_filter" onclick="filtrarMentores('${mentoresUrl}', 'filter_tema', 0)">Todos</label>`;
    dataList.forEach(item => {
        const cardHtml = `<input type="radio" class="tema_radio d-none" id="radio_tema_${item.id}" name="filter_tema" value="${item.id}">
                            <label for="radio_tema_${item.id}" class="nav-link col d-flex align-items-center justify-content-center nav_tab_filter" onclick="filtrarMentores('${mentoresUrl}', 'filter_tema', ${item.id})">${item.title_tema}</label>`;
        temp += cardHtml;
    });
    elementId.innerHTML = temp;
};

// Función para construir las tarjetas para cada mentor
function buildMentorCard(dataList, elementId) {
    var temp = '';
    if (dataList.length > 0) {
        dataList.forEach(item => {
            const cardHtml = `
                    <div class="col-lg-3 mb-lg-3 ">
                      <div class="card_item_me">
                        <div class="flex_price_star">
                          <div><img src="assets/img/star.png" class="me-lg-2">${item.estrellas}</div>
                          <div class="text-end">
                            <p class="m-0 w_f_price">S/${item.precio}</p>
                          </div>
                        </div>
                        <div class="img_perfil_empresa text-center py-lg-4">
                          <div class="position-relative">
                            <img src="assets/img/avatar.png">
                            <div class="img_empresa"><img src="assets/img/empresa.png" class=""></div>
                          </div>
                        </div>
                        <div class="datos_usuario text-center">
                          <p>${item.nombre_completo}</p>
                          <span>${item.empresa}</span>
                        </div>
                        <div class="separador_user_link"></div>
                        <div class="redes_wb_links text-center">
                          <ul>
                            <li><a href="${item.linkedin}"><img src="assets/img/lin-b.png"></a></li>
                          </ul>
                          <p>Experiencia: ${item.experiencia} años</p>
                        </div>
                        <div class="agendemos_a">
                          <a href="#">Agendemos</a>
                        </div>
                      </div>
                    </div>
          `;
            temp += cardHtml;
        });
    } else {
        temp += "<p>No hay resultados...</p>"
    }
    elementId.innerHTML = temp;
};

//Filtrar
async function filtrarMentores(api_url, param, area_id) {
    const finalUrl = api_url + "?" + param + "=" + area_id;
    const mentoresList = await fetchData(finalUrl);

    if (param == 'filter_area'){
      buildMentorCard(mentoresList, mentoresAreasCardsContainer);
    }else if (param == 'filter_tema'){
      buildMentorCard(mentoresList, mentoresTemasCardsContainer);
    }
}

//Buscar 
async function buscarMentor(api_url, search_input) {
    const finalUrl = api_url + "?search=" + search_input;
    const mentoresList = await fetchData(finalUrl);
    buildMentorCard(mentoresList, mentoresAreasCardsContainer);
}