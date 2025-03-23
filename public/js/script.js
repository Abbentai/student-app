//Adds a event listener to each delete button which prevents the default action and prompts a confirmation
//Once accepted this then submits the invisible form to delete the College
document.querySelectorAll('.btn-delete').forEach((button) => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        if (confirm("Are you sure?")) {
            let action = this.getAttribute("href");
            let form = document.getElementById("form-delete");

            form.setAttribute('action', action);
            form.submit();
        }
    })
})


//References to both elements
const collegeFilter = document.getElementById('filter_college_id');
const nameFilter = document.getElementById('filter_student');

//Adds an event listener to the college filter dropdown based on the id which adds the current selected collegeID to the url
collegeFilter.addEventListener('change',
    function () {
        let collegeID = this.value || this.options[this.selectedIndex].value
        changeURL('college_id', collegeID);
    }
)

nameFilter.addEventListener('click',
    function () {
        let currentURL = new URL(window.location.href);
        let parameters = new URLSearchParams(currentURL.search);
        console.log("DINGUS")

        if (parameters.get('sort_by') === 'name') {
            changeURL('sort_by', '');
        } else {
            changeURL('sort_by', 'name');
        }
    }
)

// //Adds an event listener to the college filter dropdown based on the id which adds the current selected collegeID to the url
// document.getElementById('filter_student').addEventListener('click',
//     function () {
//         // let collegeID = this.value || this.options[this.selectedIndex].value
//         window.location.href = window.location.href.split('?')[0] + '?college_id=?filter_by=' + "name"
//     }
// )

function changeURL(parameter, value) {
    //Retrieves current url and parameters and instantiating them as URL and URLSearchParams objects
    let currentURL = new URL(window.location.href);
    let parameters = new URLSearchParams(currentURL.search);

    //sets or deletes the parameter depending on the value passed
    if (value) {
        parameters.set(parameter, value);
    } else {
        parameters.delete(parameter);
    }

    //sets new search params in currentURL object and then converts it back to a string so the browser can redirect to the new url
    currentURL.search = parameters.toString();
    window.location.href = currentURL.toString();
}