{include file="head.tpl"}

<div class="container">
    <div class="row my-5">
        <div class="col mx-auto">
            <h1 class="text-center">Weather forecast!</h1>
        </div>
    </div>
    <div class="row my-5">
        <form method="get" action="services/weather" class="col col-md-6 mx-auto text-center">
            <div class="form-group">
                <input id="city" type="text" class="form-control" name="city" placeholder="Search for your city!">
                <button type="submit" class="btn btn-info mt-1" id="search">Search</button>
            </div>
        </form>
    </div>
    <div class="row my-5">
        <div class="col col-md-6 mx-auto">
            {include file="handlebar.tpl"}
        </div>
    </div>
</div>


{include file="footer.tpl"}