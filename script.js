// Create
const insertData = (url, rollNo, data) => {
    try {
        db.ref("adventours/" + url + rollNo).set(data);
        Swal.fire({
          title: "Success!",
          text: "Data inserted successfully!",
          icon: "success",
        });
    } catch (error) {
        Swal.fire({
          title: "Error!",
          text: error,
          icon: "error",
        });
    }
}

// Read
const readData = (url, rollNo) => {
    try {
      db.ref("adventours/" + url + rollNo).on("value", (snap) => {
        return snap.va();
      });
    } catch (error) {
      Swal.fire({
        title: "Error!",
        text: error,
        icon: "error",
      });
    }
};


// Update
const updateData = (url, rollNo, data) => {
    try {
        let finalData = data;
        if (finalData.hasOwnProperty("rollNo")) {
          delete finalData.rollNo;
        }
        db.ref("adventours/" + url + rollNo).update(finalData);
        Swal.fire({
          title: "Success!",
          text: "Data updated successfully!",
          icon: "success",
        });
    } catch (error) {
        Swal.fire({
          title: "Error!",
          text: error,
          icon: "error",
        });
    }
};


// Delete
const deleteData = (url, rollNo) => {
    try {
      
      db.ref("adventours/" + url + rollNo).remove();
      Swal.fire({
        title: "Success!",
        text: "Data removed successfully!",
        icon: "success",
      });
    } catch (error) {
      Swal.fire({
        title: "Error!",
        text: error,
        icon: "error",
      });
    }
};


