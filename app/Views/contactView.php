<section class="contact" id="contact">
    <div class="container min-vh-100">
        <div class="row justify-content-center">
            <h1 class="heading"> Make An Appointment</h1>
            <div>
            <form action="<?= site_url('AppointmentController/save'); ?>" method="post">
                <?=csrf_field(); ?>   <!--pour  la sécurité -->
                    <div class="inputBox" >
                        <input type="text" class="email" name="email" placeholder="your email" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="inputBox">
                        <input type="text" class="surname" name="surname" placeholder="your surname" value="<?= set_value('surname'); ?>">
                        <input type="text" class="name" name="name" placeholder="your first name" value="<?= set_value('name'); ?>">
                    </div>
                    <div class="inputBox">
                        <select id="gender" name="gender" class="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <select id="day" name="day" class="day" required>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                            <option value="sunday">Sunday</option>
                        </select>
                        <select id="hour" name="hour" class="hour" required>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                        </select>
                    </div>
                    <span class="msg text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                    <span class="msg text-danger"><?= isset($validation) ? display_error($validation, 'surname') : '' ?></span>
                    <span class="msg text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                    <?php if(!empty(session()->getFlashdata('success'))) : ?>
                        <div class="msg2  fw-bold text-center"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>
                    <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="msg2 text-danger fw-bold text-center"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>
                    <div class="inputBox d-flex justify-content-center align-items-center mt-4">
                        <input type="submit" value="make an appointment" class="ButtonApp btn btn-primary text-white ">
                    </div>
                </form>
            </div>
        </div>
    </div>

    </section>

</div>