
{foreach $rsProducts as $item name=products}
    <div style="float: left; padding: 0px 30px 40px 0px;">
        <a href="/products/{$item['id']}">
            <img src="/images/products/{$item['image']}" width="100" />
        </a><br />
        <a href="/products/{$item['id']}">{$item['name']}</a>
    </div>

    {if $smarty.foreach.products.iteration mod 3 == 0}
        <div style="clear: both;"></div>
    {/if}
{/foreach}
