// import '../../node_modules/datatables.net/js/jquery.dataTables'
// import '../../node_modules/datatables.net-dt/css/jquery.dataTables.min.css'

import details_open from '../images/dashboard/advanced-table/details_open.png'
import details_close from '../images/dashboard/advanced-table/details_close.png'
console.log('datatables')

// require('datatables.net');
// require('datatables.net-dt');

function fnFormatDetails(oTable, nTr) {
    var aData = oTable.fnGetData(nTr);
    var sOut = '<table cellpadding="0" cellspacing="0" border="0" class="table-details">';
    sOut += `<tr class="tr-details"><td class="td-details">Id: ${aData[1]}</td></tr>`;
    sOut += `<tr class="tr-details"><td class="td-details">Crée le: ${aData[3]}</td></tr>`;
    sOut += `<tr class="tr-details"><td class="td-details">Contenu:<br>${aData[7]}</td></tr>`;
    sOut += '</table>';

    return sOut;
    }
    /*
        * Initialse DataTables, with no sorting on the 'details' column
        */
    var oTable = $('#hidden-table-info').dataTable({
    displayLength: 10,
    sorting: [
        [1, 'desc']
    ],
    // autoWidth: false,
    // fixedColumns: false,
    aLengthMenu: [
        [
        10, 25, 50, -1
        ],
        [
        10, 25, 50, "Tous"
        ]
    ],
    columnDefs: [
        {
        width: '1%',
        targets: [0,8,9]
        }, {
        width: '5%',
        targets: [2,4,10]
        }, {
        width: '25%',
        targets: [5]
        }, {
        width: '40%',
        targets: [6]
        }, {
        visible: false,
        targets: [1, 7, 3]
        }, {
        bSortable: false,
        targets: [0, 11, 5]
        }
    ],
    language: {
        url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/French.json'
    }
    });

    /* Add event listener for opening and closing details
        * Note that the indicator for showing which row is open is not controlled by DataTables,
        * rather it is done here
        */
    const images = document.querySelectorAll(".toggle-img");
    for (let image of images) {
    image.addEventListener('click', function () {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
        /* This row is already open - close it */
        this.src = details_open;
        oTable.fnClose(nTr);
        } else {
        /* Open this row */
        this.src = details_close;
        oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
    })
}

// Set the modal content
function deleteModalConfirm(id) {
    const el = document.getElementById(`deleteButton_${id}`);
    const message = `Êtes-vous sur de vouloir supprimer le contenu contenant le titre <b>${el.dataset.title}</b> ?`
    document.getElementById('modal-title').innerHTML = "Suppression d'un contenu" ;
    document.getElementById('modal-content').innerHTML = message;
    document.getElementById('delete-confirm').href = `/dashboard/contents/delete/${el.dataset.slug}`
}

window.onload = () => {
    let privateCheckbox = document.querySelectorAll("[id*=private_]")
    for(let checkbox of privateCheckbox) {
        checkbox.addEventListener("click", function(){
            let xmlhttp = new XMLHttpRequest
            xmlhttp.open("get", `/dashboard/contents/switchPrivate/${this.dataset.id}`)
            xmlhttp.send()
        })
    }

    let publishedCheckbox = document.querySelectorAll("[id*=published_]")
    for(let checkbox of publishedCheckbox) {
        checkbox.addEventListener("click", function(){
            let xmlhttp = new XMLHttpRequest
            xmlhttp.open("get", `/dashboard/contents/switchPublished/${this.dataset.id}`)
            xmlhttp.send()
        })
    }
}