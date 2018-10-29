
<div class="courses-form">
    <div class="regForm contact-wthree">
        <form autocomplete="off" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Register Here</h3>
            <div class="form-w3step1">
                <input type="text" name="name" placeholder="Your Name" value="{{old('name')}}" required> 
                <input type="email" class="email agileits-btm" name="email" value="{{old('email')}}" placeholder="Email" required> 
            </div>
            <h3>Contact</h3>
            <div class="form-w3step1 w3ls-formrow">
                <input type="text" name="phone" value="{{old('phone')}}" placeholder="Mobile number" required>
                <input type="text" class="agileits-btm" value="{{old('address')}}" name="address" placeholder="Your Address" required>
            </div>
            <h3>Select Course</h3>
            <div class="form-w3step1 w3ls-formrow">
                <select name="course">
                    <optgroup label="Digital Literacy">
                        <option value="Computer Fundamentals, ICT & Productivity Programs">Computer Fundamentals, ICT & Productivity Programs</option>
                        <option value="The Internet, Cloud Services and World Wide Web">The Internet, Cloud Services and World Wide Web</option>
                        <option value="Digital Lifestyle, Computer Security & Privacy">Digital Lifestyle, Computer Security & Privacy</option>
                    </optgroup>
                    <optgroup label="Web Development Technologies">
                        <option value="Web Design">Web Design</option>
                        <option value="Front-end Development">Front-end Developer</option>
                        <option value="Web Programming">Web Programming</option>
                        <option value="Full Stack Developer">Full Stack Developer</option>
                    </optgroup>
                    <optgroup label="Programming">
                        <option value="Java">Java</option>
                        <option value="Android">Android</option>
                        <option value="Python">Python</option>
                        <option value="Matlab">Matlab</option>
                    </optgroup>
                    <optgroup label="Networking">
                        <option value="ICND1">ICND1</option>
                        <option value="ICND2">ICND2</option>
                        <option value="CCNAX">CCNAX</option>
                        <option value="CCNP">CCNP</option>
                    </optgroup>
                </select>
            </div>
            {{-- <div class="agileits-row2 w3ls-formrow2">
                <input type="checkbox" id="brand2" value="">
                <label for="brand2"><span></span>I accept the terms of Use</label> 
            </div>   --}}
            <input type="submit" value="SUBMIT">
        </form> 
    </div>
    <div class="courses">
        <h5>Digital Literacy</h5>
        <ul>
            <li>Computer Fundamentals, ICT & Productivity Programs</li>
            <li>The Internet, Cloud Services and World Wide Web</li>
            <li>Digital Lifestyle, Computer Security & Privacy</li>
        </ul>
        <h5>Web Development Technologies</h5>
        <ul>
            <li>Web Design</li>
            <li>Front-end Developer</li>
            <li>Web Programming</li>
            <li>Full Stack Developer</li>
        </ul>
        <h5>Programming</h5>
        <ul>
            <li>Java</li>
            <li>Android</li>
            <li>Python</li>
            <li>MatLab</li>
        </ul>
        <h5>Networking</h5>
        <ul>
            <li>CCNA</li>
            <li>CCNP</li>
        </ul>
    </div>
</div>