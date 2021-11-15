<?php

?>


    <ul class="offer-details">
        <li class="offer-actions">
            <a class="btn" href="#">Delete</a>
        </li>

        <li class="offer-id">
            <div>offer ID:</div>
            <div>
                    <?php echo $job['id']; ?>
            </div>
        </li>

        <li class="offer-title">
            <div>Title: </div>
            <div>
                <?php echo $job['title']; ?>
            </div>
        </li>

        <li class="offer-date">
            <div>Publishing date: </div>
            <div>
                <?php echo $job['publish_date']; ?>
            </div>
        </li>

        <li class="offer-last-edit">
            <div>Last edited: </div>
            <div>
                <?php echo $job['last_edited']; ?>
            </div>
        </li>

        <li class="offer-last-editor">
            <div> Last editor: </div>
            <div>
                <?php echo $job['user_id']; ?>
            </div>
        </li>

        <li class="offer-actions">
            <a  class="btn" href="/single_offer_page?offerID=<?php echo $job['id']; ?>">Edit</a>
        </li>
    </ul>
