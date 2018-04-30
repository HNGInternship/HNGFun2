<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {

       
        /* Variables */
        let suggestions = document.querySelector('#suggestions');
        let form = document.querySelector('#search-form');
        let search = document.querySelector('#search');


        showSuggestions(json) {

        }
    
        function getSuggestions() {

            let q = search.value;

            if(q.length < 3) {
                return;
            }

            var xhr = new XMLHttpequest();
            xhr.open('GET', 'autosuggest.php?q=' + q, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHTTPRequest');
            xhr.onreadystatechange = function() {
                if(xhr.readyState == 4 && xhr.status == 200) {
                    var result = xhr.responseText;

                    var json = JSON.parse(result);
                    showSuggestions(json);
                }
            };
            xhr.send();
        }

        search.addEventListener('input', getSuggestions);
    }
</script>