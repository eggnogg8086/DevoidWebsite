
<action-bar id="action-bar">   
    <handle>
        <button onclick="toggleComments()" id="showCommentsButton" style="grid-column: 2;">see comments</button>     
        <button onclick="toggleActionBar()" id="showActionBar" style="grid-column: 3;">hide</button>     
    </handle>

    <container id="container">
        <banner>NOW READING</banner>
        <page-selector>
            <a href="<?php if($act > 1) echo "act".($act-1);?>"> <img class="novelNavBtn" src="../images/prevActBtn.svg" alt="prevAct"></a>
            <div onclick="previousPage()">
                <img class="novelNavBtn" src="../images/prevPageBtn.svg" alt="prevPage" >
            </div>
            <select title="act" id="actnumber" onchange="selectAct(true)">
                <option value="a1" <?php if($act == 1) echo "selected"?>>ACT 1</option>
                <option value="a2" <?php if($act == 2) echo "selected"?>>ACT 2</option>
                <option value="a3" <?php if($act == 3) echo "selected"?>>ACT 3</option>
                <option value="a4" <?php if($act == 4) echo "selected"?>>ACT 4</option>
            </select>
            <select title="page" id="pagenumber" onchange="selectPage()">
            </select>
            <div onclick="nextPage()">
                <img class="novelNavBtn" src="../images/nextPageBtn.svg" alt="nextPage">
            </div>
            <a href="<?php if($act < 4) echo "act".($act+1);?>"> <img class="novelNavBtn" src="../images/nextActBtn.svg" alt="nextAct"></a>
        </page-selector>
        <?php include '../php/view_components/comments.php';?>
    </container>

</action-bar>

<script>
    const orientation = window.matchMedia("(orientation: portrait)")

    const ActionBarState = Object.freeze({
        open: 0,
        closed: 1,
        hidden: 2
    })
    let currentState = ActionBarState.closed;

    const box = document.getElementById('action-bar');
    const container = document.getElementById('container');
    const showCommentsButton = document.getElementById('showCommentsButton');
    const showActionBarButton = document.getElementById('showActionBar');

    selectAct(false);

    function selectAct(redirect){
        var act = document.getElementById("actnumber").value;
        var pages = document.getElementById("pagenumber");

        switch (act) {
            case 'a1':
                if(redirect) window.location.href = "act1";
                for (let index = 1; index <= 10; index++) 
                    pages.add(new Option("PAGE "+index, "PAGE"+index), null);
            break;
            case 'a2':
                if(redirect) window.location.href = "act2";
                for (let index = 11; index <= 20; index++) 
                    pages.add(new Option("PAGE "+index, "PAGE"+index), null);                    
            break;
            case 'a3':
                if(redirect) window.location.href = "act3";
                for (let index = 21; index <= 26; index++) 
                    pages.add(new Option("PAGE "+index, "PAGE"+index), null);
            break;
            case 'a4':
                if(redirect) window.location.href = "act4";
                for (let index = 27; index <= 38; index++) 
                    pages.add(new Option("PAGE "+index, "PAGE"+index), null);
                break;
    
            default:
                break;
        }
    }
    function selectPage(index){
        const val = document.getElementById("pagenumber").value;
        document.querySelector('#'+val).scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    }
    function previousPage(){
        var selectElement = document.getElementById("pagenumber");

        if(selectElement.selectedIndex > 0) {
            selectElement.selectedIndex -= 1;
            selectPage(selectElement.selectedIndex);
        }
        else if(selectElement.selectedIndex == 0){
            
            window.location.href = "<?php /* TODO CSRF check */ if($act > 1) echo "act".($act-1); else echo "#";?>";
        }

    }    
    function nextPage(){
        var selectElement = document.getElementById("pagenumber");
        
        if(selectElement.selectedIndex < selectElement.options.length - 1) {
            selectElement.selectedIndex += 1;
            selectPage(selectElement.selectedIndex);
        }
        else if(selectElement.selectedIndex == selectElement.options.length - 1){
            window.location.href = "<?php /* TODO CSRF check */ if($act < 4) echo "act".($act+1); else echo "#end";?>";
        }
    }

    function toggleComments(){
        switch (currentState) {
            case ActionBarState.open:
                showCommentsButton.textContent = "see comments";        
                box.style.bottom = "";
                currentState = ActionBarState.closed;
                break;
            case ActionBarState.closed:
                showCommentsButton.textContent = "hide comments";
                box.style.bottom = "0px";
                currentState = ActionBarState.open;
                break;
            case ActionBarState.hidden:
                break;
            default:
                break;
        }
    }

    function toggleActionBar(){
        switch (currentState) {
            case ActionBarState.open:
                currentState = ActionBarState.hidden;
                showCommentsButton.textContent = "see comments";
                showActionBarButton.textContent = "show"
                showCommentsButton.style.display = 'none';
                container.style.opacity = "0%";
                box.style.bottom = "var(--action-bar-bottom-offset-hidden)";
                break;
            case ActionBarState.closed:
                currentState = ActionBarState.hidden;                           
                showActionBarButton.textContent = "show"
                showCommentsButton.style.display = 'none';
                container.style.opacity = "0%";
                box.style.bottom = "var(--action-bar-bottom-offset-hidden)";
                break;
            case ActionBarState.hidden:
                currentState = ActionBarState.closed;
                showActionBarButton.textContent = "hide"
                showCommentsButton.style.display = '';
                container.style.opacity = "";
                box.style.bottom = "";
                break;
            default:
                break;
        }
    }

    orientation.addEventListener("change", function() {
        if(orientation.matches){
            if(currentState == ActionBarState.hidden)
                container.style.opacity = "0%";
        }
        else{
            container.style.opacity = "";
        }
    });
</script>