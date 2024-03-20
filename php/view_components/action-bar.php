<action-bar id="action-bar">        
    <banner>NOW READING</banner>
    <page-selector>
        <a href="<?php if($act > 1) echo "act".($act-1);?>"> <img class="novelNavBtn" src="../images/prevActBtn.svg" alt="prevAct"></a>
        <div onclick="previousPage()">
            <img class="novelNavBtn" src="../images/prevPageBtn.svg" alt="prevPage" >
        </div>
        <select id="actnumber" onchange="selectAct(true)">
            <option value="a1" <?php if($act == 1) echo "selected"?>>ACT 1</option>
            <option value="a2" <?php if($act == 2) echo "selected"?>>ACT 2</option>
            <option value="a3" <?php if($act == 3) echo "selected"?>>ACT 3</option>
            <option value="a4" <?php if($act == 4) echo "selected"?>>ACT 4</option>
        </select>
        <select id="pagenumber" onchange="selectPage()">
        </select>
        <div onclick="nextPage()">
            <img class="novelNavBtn" src="../images/nextPageBtn.svg" alt="nextPage">
        </div>
        <a href="<?php if($act < 4) echo "act".($act+1);?>"> <img class="novelNavBtn" src="../images/nextActBtn.svg" alt="nextAct"></a>
    </page-selector>
    <?php include '../php/view_components/comments.php';?>
</action-bar>

<script>
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

    function selectPage(){
        const val = document.getElementById("pagenumber").value;
        document.querySelector('#'+val).scrollIntoView({
            behavior: 'smooth'
        });
    }

    function previousPage(){
        var selectElement = document.getElementById("pagenumber");
        console.log(selectElement.selectedIndex);
        console.log(selectElement.options.length);
        
        if(selectElement.selectedIndex > 0) {
            selectElement.selectedIndex -= 1;
            selectPage();
        }
    }
    
    function nextPage(){
        var selectElement = document.getElementById("pagenumber");
        console.log(selectElement.selectedIndex);
        console.log(selectElement.options.length);
        
        if(selectElement.selectedIndex < selectElement.options.length - 1) {
            selectElement.selectedIndex += 1;
            selectPage();
        }
    }


    var box = document.getElementById('action-bar');
  
    // box.addEventListener('touchstart', function(e) {
    //     start = e.targetTouches[0].pageY;
    // })
    console.log(window.innerHeight)
    
    box.addEventListener('touchmove', function(e) {
        event.preventDefault();
        box.style.bottom = window.innerHeight - event.touches[0].clientY - box.clientHeight  + "px";
    });
    
    box.addEventListener('touchend', function(e) {
        const viewportHeight = window.innerHeight;
        const fiftyVhInPixels = viewportHeight * 0.5; // 50vh is half of viewport height

        // Step 2: Multiply 50vh by -1
        const negativeFiftyVhInPixels = fiftyVhInPixels * -1;

        // Step 3: Convert -4.8rem to pixels
        const rootFontSize = parseFloat(getComputedStyle(document.documentElement).fontSize); // Get root em size
        const negativeFourPointEightRemInPixels = -4.8 * rootFontSize;

        // Calculate the final result
        const finalResult = negativeFiftyVhInPixels - negativeFourPointEightRemInPixels;


        console.log(finalResult);

        if(box.style.bottom.slice(0, -2) > 0)
            box.style.bottom = "0px";
        else if(box.style.bottom.slice(0, -2) < finalResult)
            box.style.bottom = finalResult+"px";
    })

    function getPos(el) {
        var rect=el.getBoundingClientRect();
        return {x:rect.left,y:rect.top};
    }
</script>