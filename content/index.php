<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header></header>
    <div class="body-content">
        <div class="top-bar">
            <span>Glamour</span>
            <span>Collection</span>
        </div>
        <div class="body-content-main">
            <div class="filter-window">
                <form action="" class="s-filter-form">
                    <div class="top">
                        <div class="left">
                            <div class="filter-search-container">
                                <label class="" for="search">
                                    <input class="filter-search-box" type="text" id="filter_glamour_title" name="title" placeholder="Search" maxlength="100" value="">
                                    <img src="/resources/icons/search.svg" onclick="document.getElementById('filter_form').submit()" class="filter-search-icon">
                                </label>
                            </div>
                            <div class="filter-search-container">
                                <label class="" for="search">
                                    <span class="filter-search-label">Maximum Level</span>
                                    <input class="filter-search-box-number" type="number" id="filter_max_level" name="max_level" placeholder="" maxlength="2" max="80" value="">
                                </label>
                            </div>
                            <div class="filter-fieldset-container">
                                <fieldset>
                                    <legend class="filter-search-label">Races & Clans</legend>
                                     <label><input id="checkbox-hyur" type=checkbox name=c value=0>Hyur</label>
                                     <label><input id="checkbox-highlander" type=checkbox name=c value=0>Highlander</label>
                                     <label><input id="checkbox-elezen" type=checkbox name=c value=0>Elezen</label>
                                     <label><input id="checkbox-miqote" type=checkbox name=c value=0>Miqo'te</label>
                                     <label><input id="checkbox-lalafell" type=checkbox name=c value=0>Lalafell</label>
                                     <label><input id="checkbox-roegadyn" type=checkbox name=c value=0>Roegadyn</label>
                                     <label><input id="checkbox-aura" type=checkbox name=c value=0>Au Ra</label>
                                     <label><input id="checkbox-viera" type=checkbox name=c value=0>Viera</label>
                                     <label><input id="checkbox-hrothgar" type=checkbox name=c value=0>Hrothgar</label>
                                </fieldset>
                            </div>
                            <div class="filter-fieldset-container">
                                <fieldset  id="job-fieldset">
                                    <legend class="filter-search-label">Equippable By</legend>
                                        <label><input class="job-hidden-checkbox" id="checkbox-pld" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-pld.png" alt="PLD" title="Paladin"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-war" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-war.png" alt="WAR" title="Warrior"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-drk" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-drk.png" alt="DRK" title="Dark Knight"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-gnb" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-gnb.png" alt="GNB" title="Gunbreaker"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-whm" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-whm.png" alt="WHM" title="White Mage"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-sch" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-sch.png" alt="SCH" title="Scholar"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-ast" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-ast.png" alt="AST" title="Astrologian"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-mnk" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-mnk.png" alt="MNK" title="Monk"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-drg" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-drg.png" alt="DRG" title="Dragoon"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-nin" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-nin.png" alt="NIN" title="Ninja"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-sam" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-sam.png" alt="SAM" title="Samurai"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-brd" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-brd.png" alt="BRD" title="Bard"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-mch" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-mch.png" alt="MCH" title="Machinist"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-dnc" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-dnc.png" alt="DNC" title="Dancer"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-blm" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-blm.png" alt="BLM" title="Black Mage"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-smn" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-smn.png" alt="SMN" title="Summoner"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-rdm" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-rdm.png" alt="RDM" title="Red Mage"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-blu" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-blu.png" alt="BLU" title="Blue Mage"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-crp" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-crp.png" alt="CRP" title="Carpenter"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-bsm" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-bsm.png" alt="BSM" title="Blacksmith"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-arm" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-arm.png" alt="ARM" title="Armorer"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-gsm" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-gsm.png" alt="GSM" title="Goldsmith"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-ltw" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-ltw.png" alt="LTW" title="Leatherworker"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-wvr" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-wvr.png" alt="WVR" title="Weaver"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-alc" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-alc.png" alt="ALC" title="Alchemist"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-cul" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-cul.png" alt="CUL" title="Culinarian"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-min" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-min.png" alt="MIN" title="Miner"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-btn" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-btn.png" alt="BTN" title="Botanist"></label>
                                        <label><input class="job-hidden-checkbox"  id="checkbox-fsh" type=checkbox name=c value=0><img src="/resources/icons/jobs/job-fsh.png" alt="FSH" title="Fisher"></label>
                                        <label><input id="checkbox-job-show-only-option" type=checkbox name=c value=0>Show only selected jobs</label>
                                </fieldset>
                            </div>
                            <div class="filter-option-container">
                                <span class="filter-search-label">Order</span>
                                <label><input id="checkbox-order-by-loves" type=checkbox name=c value=0>Order by loves</label>
                            </div>
                        </div>
                        <div class="right">
                        
                        <div class="filter-fieldset-container">
                                <fieldset  id="equip-fieldset">
                                    <legend class="filter-search-label">Using:</legend>
                                    <span>type ‘not:’ to exclude results (i.e. not:hempen coif)</span>
                                        <label><img src="/resources/icons/slots/head.png" alt="Head" title="Head"><input class="equip-input" id="filter-search-equip-head" placeholder="Any head" type=text name=equip-head maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/body.png" alt="Body" title="Body"><input class="equip-input" id="filter-search-equip-body" placeholder="Any body" type=text name=equip-body maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/hands.png" alt="Hands" title="Hands"><input class="equip-input" id="filter-search-equip-hands" placeholder="Any hands" type=text name=equip-hands maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/legs.png" alt="Legs" title="Legs"><input class="equip-input" id="filter-search-equip-legs" placeholder="Any legs" type=text name=equip-legs maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/feet.png" alt="Feet" title="Feet"><input class="equip-input" id="filter-search-equip-feet" placeholder="Any feet" type=text name=equip-feet maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/weapon.png" alt="Weapon" title="Weapon"><input class="equip-input" id="filter-search-equip-weapon" placeholder="Any main hand" type=text name=equip-weapon maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/offhand.png" alt="Offhand" title="Offhand"><input class="equip-input" id="filter-search-equip-offhand" placeholder="Any offhand" type=text name=equip-offhand maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/earrings.png" alt="Earrings" title="Earrings"><input class="equip-input" id="filter-search-equip-earrings" placeholder="Any earrings" type=text name=equip-earrings maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/necklace.png" alt="Necklace" title="Necklace"><input class="equip-input" id="filter-search-equip-necklace" placeholder="Any necklace" type=text name=equip-necklace maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/bracelets.png" alt="Bracelet" title="Bracelet"><input class="equip-input" id="filter-search-equip-bracelet" placeholder="Any bracelet" type=text name=equip-bracelet maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/ring.png" alt="Ring" title="Ring"><input class="equip-input" id="filter-search-equip-ring" placeholder="Any ring" type=text name=equip-ring maxlength="100" value=""></label>
                                        <label><img src="/resources/icons/slots/ring.png" alt="Ring" title="Ring"><input class="equip-input" id="filter-search-equip-ring" placeholder="Any ring" type=text name=equip-ring maxlength="100" value=""></label>

                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <button class="filter-button">Reset Filters</button>
                        <button class="filter-button">Apply Filters</button>
                    </div>
                </form>
            </div>
            <div class="gallery-window">
                <div class="gallery-grid">
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                    <article class="gallery-grid-item">
                        <a href="">
                            <div class="gallery-grid-item-content"></div>
                            <img src="/card_image.png" alt="" loading="lazy">
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</body>

</html>