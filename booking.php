<?php include 'header.php'; ?>

<div class="main-Bookingbg">
<div class="container">
    <div class="main-Booking">
        <form>
        <fieldset>
        <legend>Make an Order</legend>
            
                <div class="form-group">
                    <label for="Rooms">Select Your Enquiry:</label>
                    <select class="form-control" id="Rooms">
                      
                      <option>Single Room</option>
                      <option>Double Room</option>
                      <option>Triple Room</option>
                      <option>Suit</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Number Of Rooms</label>
                    <input type="number" class="form-control" name="numberOfRooms" placeholder="0">
                
                </div>
        
                <div class="form-group">
                    <label for="Rooms">Select One Of Our Available Offers:</label>
                    <select class="form-control" id="Rooms">
                      
                      <option>offer 1</option>
                      <option>offer 2</option>
                      <option>offer 3</option>                      
                    </select>
                </div>
        
            
                <div class="form-group">
                    <label for="Rooms">Date Of Arrival:</label>
                    <input type="date" class="form-control" name="dateOfArrival">
                </div>
                
                <div class="form-group">
                    <label>Number Of Days</label>
                    <input type="number" class="form-control" name="numberOfDays" placeholder="0">
                </div>
                
                <div class="form-group">
                    <label>Number Of Persons</label>
                    <input type="number" class="form-control" name="numberOfPersons" placeholder="0">
                </div>
            
            
            
            
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" value="Breakfast">Breakfast </label>
                <label class="checkbox-inline"><input type="checkbox" value="Lunch">Lunch </label>
                <label class="checkbox-inline"><input type="checkbox" value="Dinner">Dinner </label>
            </div>
            
            <div class="form-group">
                <label for="comment">Customer Enquiry:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            
            <button type="submit" class="btn btn-default">Submit</button>
        </fieldset>
        </form>
    </div>	
</div>
</div>
<?php include 'footer.php'; ?>