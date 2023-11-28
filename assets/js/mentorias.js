$(document).ready(function () {

    const apiAreasUrl = 'api/areas.php';
    const apiMentoresUrl = 'api/mentores.php';

    const navTabContainer = document.getElementById('nav_tab_areas');
    const mentoresCardsContainer = document.getElementById('mentoresCardsContainer');


    // Ejecutar la lógica de la aplicación
    (async () => {
        const areasList = await fetchData(apiAreasUrl);
        const mentoresList = await fetchData(apiMentoresUrl);

        if (areasList.length > 0) {
            buildNavTabs(areasList, navTabContainer, apiMentoresUrl);
            buildMentorCard(mentoresList, mentoresCardsContainer);
        }
    })();

    $("#mentorias_form").on('submit', function (e) { e.preventDefault() });

    // Manejar el evento de entrada en el cuadro de búsqueda
    $('#search_input input').on('input', function (e) {
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
function buildNavTabs(dataList, elementId, mentoresUrl) {
    let temp = `<input type="radio" class="area_radio d-none" id="radio_0" name="filter_area" checked value="">
                    <label for="radio_0" class="nav-link col nav_tab_filter" onclick="filtrarMentores('${mentoresUrl}', 0)">Todos</label>`;
    dataList.forEach(item => {
        const cardHtml = `<input type="radio" class="area_radio d-none" id="radio_${item.id}" name="filter_area" value="${item.id}">
                            <label for="radio_${item.id}" class="nav-link col nav_tab_filter" onclick="filtrarMentores('${mentoresUrl}', ${item.id})">${item.title_area}</label>`;
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
async function filtrarMentores(api_url, area_id) {
    const mentoresList = await fetchData(api_url + "?filter_area=" + area_id);
    buildMentorCard(mentoresList, mentoresCardsContainer);
}

//Buscar 
async function buscarMentor(api_url, search_input) {
    const finalUrl = api_url + "?search=" + search_input;
    const mentoresList = await fetchData(finalUrl);
    buildMentorCard(mentoresList, mentoresCardsContainer);
}