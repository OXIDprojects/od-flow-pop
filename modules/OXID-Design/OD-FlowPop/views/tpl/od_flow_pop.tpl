[{$smarty.block.parent}]
[{oxifcontent ident="odFlowPop" object="oCont"}]
[{assign var="oConf" value=$oViewConf->getConfig()}]
[{assign var="odHomePop" value=$oConf->getConfigParam('odHomePop')}]
[{assign var="showPop" value=true}]
[{if $odHomePop && $oView->getClassName() ne "start"}]
[{assign var="showPop" value=false}]
[{/if}]
[{if $showPop}]
[{assign var="odOpenPop" value=$oConf->getConfigParam('odOpenPop')}]
[{assign var="odClosePop" value=$oConf->getConfigParam('odClosePop')}]
[{math assign="odClosePop" equation="x + y" x=$odOpenPop y=$odClosePop}]
[{capture assign="odFlowPop" name="odFlowPop"}]
setTimeout(function(){
$('#odFlowPop').modal('show');
}, [{$odOpenPop}]);
setTimeout(function(){
$('#odFlowPop').modal('hide');
}, [{$odClosePop}]);
[{/capture}]
[{oxscript add=$odFlowPop}]
<!-- OD Flow-Modal -->
<div id="odFlowPop" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <!-- OD Flow-Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">[{oxmultilang ident="CLOSE"}]</span>
                </button>
                <h4 class="modal-title">[{$oCont->oxcontents__oxtitle->value}]</h4>
            </div>
            <div class="modal-body">
                <p>[{$oCont->oxcontents__oxcontent->value}]</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">[{oxmultilang ident="CLOSE"}]</button>
            </div>
        </div>
    </div>
</div>
[{/if}]
[{/oxifcontent}]
