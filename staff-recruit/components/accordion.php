<?php include $path . './data/jobData.php'; ?>

<?php foreach ($jobs as $job): ?>
  <section class="accordion">
    <button class="accordion__button fadeIn1">
      <p class="accordion__button--inner">
        <span class="text">
          <?php echo $job['職種']; ?>
        </span>
        <span class="arrow"></span>
      </p>
    </button>
    <div class="accordion__inner">
      
      <div class="accordion__inner--list fadeIn1">
        <div class="listInner">
          <div class="listName">
            <div class="listName__inner">
              <p class="listName__inner--text">給与/報酬</p>
            </div>
          </div>
          <div class="listContent">
            <div class="listContent__inner innerGap">
              <?php foreach ($job['給与/報酬'] as $salary_info): ?>
                <p class="listContent__inner--text">
                  <?php echo $salary_info; ?>
                </p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion__inner--list fadeIn1">
        <div class="listInner">
          <div class="listName">
            <div class="listName__inner">
              <p class="listName__inner--text">業種</p>
            </div>
          </div>
          <div class="listContent">
            <div class="listContent__inner">
                <p class="listContent__inner--text">
                  風俗ワーク
                </p>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion__inner--list fadeIn1">
        <div class="listInner">
          <div class="listName">
            <div class="listName__inner">
              <p class="listName__inner--text">仕事内容</p>
            </div>
          </div>
          <div class="listContent">
            <div class="listContent__inner">
              <?php foreach ($job['仕事内容'] as $work_info): ?>
                <p class="listContent__inner--text">
                  <?php echo $work_info; ?>
                </p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion__inner--list fadeIn1">
        <div class="listInner">
          <div class="listName">
            <div class="listName__inner">
              <p class="listName__inner--text">雇用形態</p>
            </div>
          </div>
          <div class="listContent">
            <div class="listContent__inner">
              <p class="listContent__inner--text">
                <?php echo $job['雇用形態']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion__inner--list fadeIn1">
        <div class="listInner">
          <div class="listName">
            <div class="listName__inner">
              <p class="listName__inner--text">勤務地</p>
            </div>
          </div>
          <div class="listContent">
            <div class="listContent__inner">
              <p class="listContent__inner--text">
                <?php echo $job['勤務地']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion__inner--list fadeIn1">
        <div class="listInner">
          <div class="listName">
            <div class="listName__inner">
              <p class="listName__inner--text">勤務時間</p>
            </div>
          </div>
          <div class="listContent">
            <div class="listContent__inner">
              <?php foreach ($job['勤務時間'] as $time_info): ?>
                <p class="listContent__inner--text">
                  <?php echo $time_info; ?>
                </p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion__inner--list fadeIn1">
        <div class="listInner">
          <div class="listName">
            <div class="listName__inner">
              <p class="listName__inner--text">休日</p>
            </div>
          </div>
          <div class="listContent">
            <div class="listContent__inner">
              <?php foreach ($job['休日'] as $holiday_info): ?>
                <p class="listContent__inner--text">
                  <?php echo $holiday_info; ?>
                </p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion__inner--list fadeIn1">
        <div class="listInner">
          <div class="listName">
            <div class="listName__inner">
              <p class="listName__inner--text">待遇</p>
            </div>
          </div>
          <div class="listContent">
            <div class="listContent__inner">
              <?php foreach ($job['待遇'] as $benefit_info): ?>
                <p class="listContent__inner--text">
                  <?php echo $benefit_info; ?>
                </p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion__inner--list noBorder">
        <div class="listInner">
          <div class="listName">
            <div class="listName__inner">
              <p class="listName__inner--text">備考</p>
            </div>
          </div>
          <div class="listContent">
            <div class="listContent__inner">
              <?php foreach ($job['備考'] as $note_info): ?>
                <p class="listContent__inner--text">
                  <?php echo $note_info; ?>
                </p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endforeach; ?>